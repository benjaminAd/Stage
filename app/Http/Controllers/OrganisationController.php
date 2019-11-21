<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organisations;
use Illuminate\Support\Facades\DB;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = DB::table('type_organisations')->select('TypeOrganisation', 'Id')->get();
        return view('Maquette InscriptionOrganisation.SubscribeOrganisation', ['types' => $type]);
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
            'IdCP' => 0,
            'IdTypeOrga' => 1,
            'IdPorteur' => 1,
            'RaisonSociale' => $request->get('RaisonSociale'),
            'SigleOrg' => $request->get('sigle'),
            'LogoURL' => 'un url quelconque',
            'Activite' => $request->get('activite'),
            'Telephone' => $request->get('telephone'),
            'NbSalaries' => $request->get('salariés'),
            'SiteUrl' => $request->get('site'),
            'Adresse' => $request->get('adresse')
        ]);
        $organisation->save();
        $id = DB::table('organisations')->where('SIRET', $request->get('siret'))->value('Id');
        DB::table('organisations')->where('Id', $id)->update(['LogoURL' => $this->uploadImg($request, $id)]);
        return redirect()->route('PortProjetSub')->with('success', 'Organisation ajoutée');
    }

    function uploadImg(Request $request, $id)
    {
        /**
         * Condition afin d'accepter le fichier:
         *  Le champs ne peut pas être vide
         * image
         * Extension : jpg,jpeg,png
         * Taille maximale de 2048 octets
         * @return Path du fichier uploader
         */
        $this->validate($request, [
            'select_file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);
        $image = $request->file('select_file'); //Méthode fournie par Laravel afin de récupérer le fichier uploader
        $new_name = $id . '.' . $image->getClientOriginalExtension();//La variable new_name va nous permettre de renommer l'image comme bon nous semble
        //dans ce cas, on renome l'image avec l'id de l'organistion et on reprend l'extension du fichier uploader par client
        $image->move(public_path("img/Logo"), $new_name);//Méthode fournie par Laravel qui permet de donner le nouveau chemin pour le fichier uploader
        return public_path("img\Logo\\") . $new_name;//
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
