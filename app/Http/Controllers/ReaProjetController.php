<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReaProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Statuts = DB::table('statut_realisateurs')->select('Statut', 'id')->get();
        $NiveauEtude = DB::table('niveau_etudes')->select('NiveauEtude', 'id')->get();
        $Ecoles = DB::table('organisations')->select('RaisonSociale', 'Id')->where('IdTypeOrga', 3)->get();
        $Domaines = DB::table('domaines')->select('Domaines', 'Id')->get();
        return view('Maquette InscriptionReaProjet.SubscribeReaProjet', [
            'NiveauxEtude' => $NiveauEtude,
            'Ecoles' => $Ecoles,
            'Statuts' => $Statuts,
            'Domaines' => $Domaines
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Création d'un réalisateur de projet
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
