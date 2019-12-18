<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
use App\RealisateurProjet;

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
        $Diplomes = DB::table('diplomes')->select('label', 'Id')->get();
        return view('Maquette InscriptionReaProjet.SubscribeReaProjet', [
            'NiveauxEtude' => $NiveauEtude,
            'Ecoles' => $Ecoles,
            'Statuts' => $Statuts,
            'Domaines' => $Domaines,
            'Formations' => $Formations,
            'Diplomes' => $Diplomes
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
            return redirect()->route("SubscribeRea")->withErrors(["Diffmdp" => "Les Mots de Passes ne correspondent pas"]);
        }
        $formations = $request->get("Formation");
        if ($formations == "Autre") {
            DB::table('formations')->insert([
                'Formations' => $request->get('NomFormation')
            ]);
            $formations = DB::table('formations')->where('Formations', $request->get('NomFormation'))->value('Id');
        }
        $ecole = $request->get("Ecole");
        if ($ecole == "autre") {
            DB::table('organisations')->insert([
                'IdTypeOrga' => 3,
                'RaisonSociale' => $request->get('EcoleNom')
            ]);
            $ecole = DB::table('organisations')->where('RaisonSociale', $request->get('EcoleNom'))->value('Id');
        }
        $diplome = $request->get("Diplome");
        if ($diplome == "Autre") {
            DB::table('diplomes')->insert([
                'label' => $request->get('NomDiplome')
            ]);
            $diplome = DB::table('diplomes')->where('label', $request->get('NomDiplome'))->value('Id');
        }
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
        //Création d'un réalisateur de projet
        $realisateur = new RealisateurProjet([
            'Nom' => $request->get('nom'),
            'Prenom' => $request->get('prenom'),
            'Email' => $request->get('mail'),
            'Login' => $request->get('login'),
            'Mdp' => Hash::make($mdp),
            'Telephone' => $request->get('tel'),
            'DateNaissance' => $request->get("naissance"),
            'CVURL' => 'c://wamp64/',
            'IdOrga' => $ecole,
            'LinkedinURL' => $request->get('linkedin'),
            'NbProjets' => 0,
            'NbPoints' => 0,
            'IdNiveauEtudes' => $request->get('NiveauEtude'),
            'IdDiplomes' => $diplome,
            'IdFormations' => $formations,
            'IdStatut' => $request->get('statut'),
            'IdDomaine' => $request->get('Domains')
        ]);
        $realisateur->save();
        return redirect()->route('connect')->with('sucess', 'Réalisateur ajouté');
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
