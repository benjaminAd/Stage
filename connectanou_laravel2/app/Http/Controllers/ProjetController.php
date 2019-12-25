<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjetStore;
use App\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function create()
    {
        return view('depotProjet/create');
    }

    public function store(ProjetStore $request)
    // la fonction store va prendre la requete en parametre
    {
        $validated = $request->validated();

        \App\Projet::create($validated);

        return response()->json('Succes');
        
        // $projet = new Projet();
        // $projet->titre_projet = $validated[' titre_projet '];
        // $projet->desc_projet = $validated[' desc_projet '];
        // $projet->date_butoir_projet = $validated[' date_butoir_projet '];
        // $projet->date_debut = $validated[' date_debut '];
        // $projet->URL_PJ = $validated[' URL_PJ '];
        // $projet->Budget_min_projet = $validated[' Budget_min_projet '];
        // $projet->budget_max_projet = $validated[' budget_max_projet '];
        // $projet->nb_realisateurs = $validated[' nb_realisateurs '];
        // $projet->stage = $validated[' stage '];

        // $projet->save();

        // return redirect()->route('welcome')->with('success','Votre annonce à été posté!');

    }

}
