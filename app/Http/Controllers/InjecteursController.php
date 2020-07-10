<?php

namespace App\Http\Controllers;

use App\Injecteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;

class InjecteursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $injecteurs = Injecteur::all();
            //$injecteurs = Injecteur::where('user_id', Auth::user()->num_ot)->get();
        return view('injecteurs.index' , ['injecteurs' => $injecteurs]);
    }
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
        return view('injecteurs.create');
    }
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $code = str_random(15);
        $characters = 'A,C,B';

        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(10000, 99999)
            . mt_rand(10000, 99999)
            . $characters[rand(0, strlen($characters) - 1)];

        // shuffle the result
        $code = str_shuffle($pin);

        $date = Carbon::parse($request->date_entree)->format('Y-m-d');

        if (Auth::check()) {
             $injecteur = Injecteur::create([
        'user_id'=>Auth::user()->id,
        'client'=> $request->input('client'),
        'contact'=> $request->input('contact'),
        'num_ot'=> $code,
        'quantite'=> $request->input('quantite'),
        'type'=> $request->input('type'),
        'serie'=> $request->input('serie'),
        'type2'=> $request->input('type2'),
        'serie2'=> $request->input('serie2'),
        'type3'=> $request->input('type3'),
        'serie3'=> $request->input('serie3'),
        'type4'=> $request->input('type4'),
        'serie4'=> $request->input('serie4'),
        'type5'=> $request->input('type5'),
        'serie5'=> $request->input('serie5'),
        'type6'=> $request->input('type6'),
        'serie6'=> $request->input('serie6'),
        'type7'=> $request->input('type7'),
        'serie7'=> $request->input('serie7'),
        'type8'=> $request->input('type8'),
        'serie8'=> $request->input('serie8'),
        'type9'=> $request->input('type9'),
        'serie9'=> $request->input('serie9'),
        'type10'=> $request->input('type10'),
        'serie10'=> $request->input('serie10'),
        'date_entree'=> $date,
        'reference'=> $request->input('reference'),
        'reference2'=> $request->input('reference2'),
        'reference3'=> $request->input('reference3'),
        'reference4'=> $request->input('reference4'),
        'reference5'=> $request->input('reference5'),
        'reference6'=> $request->input('reference6'),
        'reference7'=> $request->input('reference7'),
        'reference8'=> $request->input('reference8'),
        'reference9'=> $request->input('reference9'),
        'reference10'=> $request->input('reference10'),
        'cassure'=> $request->input('cassure'),
        'deja_repare'=> $request->input('deja_repare'),
        'deja_plombe'=> $request->input('deja_plombe'),
        'deja_controle'=> $request->input('deja_controle'),
        'avis_client'=> $request->input('avis_client'),
        'avis_technicien'=> $request->input('avis_technicien'),
        ]);

        if ($injecteur) {
            return redirect()->route('injecteurs.show', [$injecteur->id]);

        }
    }
         return back()->withInput()->with('errors', 'Demand could not be Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Injecteur  $injecteur
     * @return \Illuminate\Http\Response
     */
    public function show(Injecteur $injecteur)
    {
        $users = User::where('id', Auth::user()->id)->get();

        $injecteur = Injecteur::find($injecteur->id);
        return view('injecteurs.show', ['injecteur' => $injecteur, 'users' => $users]);
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Injecteur  $injecteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Injecteur $injecteur)
    {
        $injecteur = Injecteur::find($injecteur->id);
        return view('injecteurs.edit', ['injecteur' => $injecteur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Injecteur  $injecteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Injecteur $injecteur)
    {
        /*$user = User::find(1);*/

        $injecteurUpdate = Injecteur::where('id', $injecteur->id)->update([
        'avis_technicien'=> $request->input('avis_technicien'),
        ]);

        if ($injecteurUpdate) {
            return redirect()-> route('injecteurs.show', ['injecteur' => $injecteur->id])
            ->with('success' , 'Information successfully updated');
        }

        // Redirect
        return back()->withInput();
    }

    public function starttask(Request $request, Injecteur $injecteur)
    {
        /*$user = User::find(1);*/

        $datestart = Carbon::parse($request->debut_tache)->format('Y-m-d H:i:s');

        $injecteurUpdater1 = Injecteur::where('id', $injecteur->id)->update([
        'debut_tache'=> $datestart,
        'taskstatut' => $request->input('taskstatut'),
        ]);

        if ($injecteurUpdater1) {
            return redirect()-> route('injecteurs.show', ['injecteur' => $injecteur->id])
            ->with('success' , 'Information successfully updated');
        }

        // Redirect
        return back()->withInput();
    }


    public function endtask(Request $request, Injecteur $injecteur)
    {
        /*$user = User::find(1);*/

        $dateend = Carbon::parse($request->fin_tache)->format('Y-m-d H:i:s');

        $injecteurUpdater = Injecteur::where('id', $injecteur->id)->update([
        'fin_tache'=> $dateend,
        'taskstatut' => $request->input('taskstatut'),
        ]);

        if ($injecteurUpdater) {
            return redirect()-> route('injecteurs.show', ['injecteur' => $injecteur->id])
            ->with('success' , 'Information successfully updated');
        }

        // Redirect
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Injecteur  $injecteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Injecteur $injecteur)
    {
        //
    }
}
