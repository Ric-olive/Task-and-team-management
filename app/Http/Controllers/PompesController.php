<?php

namespace App\Http\Controllers;

use App\Pompe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PompesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if (Auth::check()) {
        return view('pompes.index');
    }
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         if (Auth::check()) {
        return view('pompes.create');
    }
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = Carbon::parse($request->date_entree)->format('Y-m-d');
        $date2 = Carbon::parse($request->date_sortie)->format('Y-m-d');

        if (Auth::check()) {
             $injecteur = Injecteur::create([
        'user_id'=>Auth::user()->id,
        'client'=> $request->input('client'),
        'contact'=> $request->input('contact'),
        'num_devis'=> $code,
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
        'reference'=> $request->input('reference2'),
        'reference'=> $request->input('reference3'),
        'reference'=> $request->input('reference4'),
        'reference'=> $request->input('reference5'),
        'reference'=> $request->input('reference6'),
        'reference'=> $request->input('reference7'),
        'reference'=> $request->input('reference8'),
        'reference'=> $request->input('reference9'),
        'reference'=> $request->input('reference10'),
        'cassure'=> $request->input('cassure'),
        'deja_repare'=> $request->input('deja_repare'),
        'deja_plombe'=> $request->input('deja_plombe'),
        'deja_controle'=> $request->input('deja_controle'),
        'avis_client'=> $request->input('avis_client'),
        ]);

        if ($injecteur) {
            return redirect()->route('injecteurs.show', [$injecteur->num_ot]);

        }
    }
         return back()->withInput()->with('errors', 'Demand could not be Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pompe  $pompe
     * @return \Illuminate\Http\Response
     */
    public function show(Pompe $pompe)
    {
        if (Auth::check()) {
        return view('pompes.create');
    }
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pompe  $pompe
     * @return \Illuminate\Http\Response
     */
    public function edit(Pompe $pompe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pompe  $pompe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pompe $pompe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pompe  $pompe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pompe $pompe)
    {
        //
    }
}
