<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;

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
        $Formations = DB::table('formations')->select('Formations', 'Id')->get();
        return view('Maquette InscriptionReaProjet.SubscribeReaProjet', [
            'NiveauxEtude' => $NiveauEtude,
            'Ecoles' => $Ecoles,
            'Statuts' => $Statuts,
            'Domaines' => $Domaines,
            'Formations' => $Formations
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
        //Récupération token et vérification de son existence
        $token = $request->get('g-recaptcha-response');
        if ($token == null) { // Lorsque que le captcha n'est pas coché $token récupère la valeur null
            // dd($token);
            return redirect()->route('SubscribeRea')->withErrors(['g-recaptcha-response' => 'veuillez cocher le Captcha']);
        }
        $mdp = $request->get("password");
        $confmdp = $request->get("password2");
        if ($mdp != $confmdp) {
            return redirect()->route("SubscribeRea")->withErrors(["Mdp" => "Les Mots de Passes ne correspondent pas"]);
        }
        $formations = $request->get("Formation");
        if ($formations == "Autre") {
            DB::table('formations')->insert([
                'Formations' => $request->get('NomFormation')
            ]);
            $formations = DB::table('organisations')->where('Formations', $request->get('NomFormation'))->value('Id');
        }
        $ecole = $request->get("Ecole");
        if ($ecole == "autre") {
            DB::table('organisations')->insert([
                'IdTypeOrga' => $request->get('EcoleNom'),
                'RaisonSociale' => $request->get('NomFormation')
            ]);
        }
        //Création d'un réalisateur de projet

        //Création du client et de la vérification du captcha par google
        $client = new Client([
            'base_uri' => 'https://www.google.com/recaptcha/api/',
            'timeout' => 5.0
        ]);
        $reponse = $client->request('POST', 'siteverify', [
            'query' => [
                'secret' => env('CAPTCHA_SECRET'),
                'response' => $token
            ]
        ]);
        $resultat = json_decode($reponse->getBody()->getContents());
        // dd($resultat);
        if (!$resultat->success) {
            return redirect()->route('SubscribeOrga')->withErrors(['g-recaptcha-response' => 'Une erreur est survenue veuillez compléter le Captcha']);
        }
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
