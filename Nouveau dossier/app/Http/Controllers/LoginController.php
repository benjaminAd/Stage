<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Auth;



class LoginController extends Controller
{
    public function formulaire()
    {
        return view('Maquette connexion.connexion');
    }

    public function traitement(Request $request)
    {


        $this->validate($request, [
            'email' => 'required' | 'email',
            'password' => 'required',

        ]);

        $user_data = array(
            'email' => $request->get('MailLog'),
            'password' => $request->get('password'),


        );


        if (filter_var($user_data['email'], FILTER_VALIDATE_EMAIL)) {
            //user sent their email 
            Auth::attempt(['email' => $request->get('MailLog'), 'password' => $request->get('password')]);
            return view("maquette landing_rea.landing_rea");
        } else {
            //they sent their username instead 
            Auth::attempt(['Login' => $request->get('MailLog'), 'password' => $request->get('password')]);
            return view("maquette landing_rea.landing_rea");
        }
    }
}
