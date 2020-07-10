<?php

namespace App\Http\Controllers;

use App\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;


class VehiculesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $vehicules = Vehicule::all();
            //$vehicules = vehicule::where('user_id', Auth::user()->num_ot)->get();
        return view('vehicules.index' , ['vehicules' => $vehicules]);
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
        return view('vehicules.create');
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

        $date = Carbon::parse($request->date_reception)->format('Y-m-d');
        $time = Carbon::parse($request->heure_reception)->format('H:i:s');

        if (Auth::check()) {
             $vehicule = Vehicule::create([
        'user_id'=>Auth::user()->id,
        'client'=> $request->input('client'),
        'contact'=> $request->input('contact'),
        'num_ot'=> $code,
        'date_reception'=>$date,
        'heure_reception'=> $time,
        'marque'=> $request->input('marque'),
        'chassis'=> $request->input('chassis'),
        'imm'=> $request->input('imm'),
        'kilometrage'=> $request->input('kilometrage'),
        'manivelle'=> $request->input('manivelle'),
        'crick'=> $request->input('crick'),
        'cle_a_roue'=> $request->input('cle_a_roue'),
        'roue_de_secours'=> $request->input('roue_de_secours'),
        'clignotant_daile'=> $request->input('clignotant_daile'),
        'clignotant_par_choc'=> $request->input('clignotant_par_choc'),
        'parbrise_avant'=> $request->input('parbrise_avant'),
        'parbrise_arriere'=> $request->input('parbrise_arriere'),
        'antenne'=> $request->input('antenne'),
        'dossiers'=> $request->input('dossiers'),
        'retroviseur_ext_gauche'=> $request->input('retroviseur_ext_gauche'),
        'retroviseur_ext_droit'=> $request->input('retroviseur_ext_droit'),
        'retroviseur_exterieur'=> $request->input('retroviseur_exterieur'),
        'retroviseur_interieur'=> $request->input('retroviseur_interieur'),
        'phare_avant'=> $request->input('phare_avant'),
        'deux_feux_arriere'=> $request->input('deux_feux_arriere'),
        'appareil_musical'=> $request->input('appareil_musical'),
        'cassette'=> $request->input('cassette'),
        'cd'=> $request->input('cd'),
        'triangle_de_detresse'=> $request->input('triangle_de_detresse'),
        'deja_repare_a_desg'=> $request->input('deja_repare_a_desg'),
        'deja_repare_ailleurs'=> $request->input('deja_repare_ailleurs'),
        'nom_de_garage'=> $request->input('nom_de_garage'),
        'avis_client'=> $request->input('avis_client'),
        'avis_technicien'=> $request->input('avis_technicien'),
        ]);

        if ($vehicule) {
            return redirect()->route('vehicules.show', [$vehicule->id]);

        }
    }
         return back()->withInput()->with('errors', 'Demand could not be Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicule $vehicule)
    {
        $users = User::where('id', Auth::user()->id)->get();

        $vehicule = Vehicule::find($vehicule->id);
        return view('vehicules.show', ['vehicule' => $vehicule, 'users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicule $vehicule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicule $vehicule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicule $vehicule)
    {
        //
    }
}
