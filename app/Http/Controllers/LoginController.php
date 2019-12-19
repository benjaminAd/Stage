<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function formulaire(){
        return view('Maquette connexion.connexion');
    }

    public function traitement(Request $request){


        $this->validate($request,[
            'email' => 'required'|'email',
            'password' => 'required'
        ]);




        return ('traitement formulaire');
    }

}
