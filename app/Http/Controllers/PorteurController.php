<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Porteur;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PorteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises = DB::table('organisations')->select('RaisonSociale', 'Id')->where('IdTypeOrga', 1)->get();
        $associations = DB::table('organisations')->select('RaisonSociale', 'Id')->where('IdTypeOrga', 2)->get();
        return view('Maquette InscriptionPorteurProjet.SusbcribePortProjet', [
            'entreprises' => $entreprises,
            'associations' => $associations
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $password = $request->get('password');
        $confPassword = $request->get('password2');
        if ($password == $confPassword) {
            $porteur = new Porteur([
                'IdOrga' => (int)$request->get('Nom'),
                'Nom' => $request->get('nom'),
                'Prenom' => $request->get('prenom'),
                'Email' => $request->get('mail'),
                'Login' => $request->get('pseudo'),
                'Mdp' => Hash::make($password),
                'Telephone' => $request->get('tel'),
                'Poste' => $request->get('postEntreprise')
            ]);
            $porteur->save();
            $id = DB::table('porteurs')->where('Login', $request->get('pseudo'))->value('Id');
            DB::table('organisations')->where('Id', $request->get('Nom'))->update(['IdPorteur' => $id]);
            return redirect()->route('connect')->with('sucess', 'Porteur ajouté');
        } else {
            return redirect()->route('PortProjetSub')->with('fail', 'Mots de passe différents');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
