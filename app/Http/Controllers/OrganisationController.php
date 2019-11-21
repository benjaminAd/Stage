<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organisations;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Maquette InscriptionOrganisation.SubscribeOrganisation');
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
        $organisation = new Organisations([
            'SIRET' => $request->get('siret'),
            'IdCP' => $request->get(''),
            'IdTypeOrga' => $request->get(''),
            'IdPorteur' => $request->get(''),
            'RaisonSociale' => $request->get('RaisonSociale'),
            'SigleOrg' => $request->get('sigle'),
            'LogoURL' => $request->get(''),
            'Activite' => $request->get('activite'),
            'Telephone' => $request->get('telephone'),
            'NbSalaries' => $request->get('salariés'),
            'SiteUrl' =>$request->get('site'),
            'Adresse'=>$request->get('adresse')
        ]);
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
