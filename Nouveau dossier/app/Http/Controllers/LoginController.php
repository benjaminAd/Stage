<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
            if (Auth::attempt(['email' => $request->get('MailLog'), 'password' => $request->get('password')])) {
                if (((DB::table('realisateur_projets')->where('Email', $request->get("MailLog"))->count()) == 1)) {
                    return redirect()->route('landingRea');
                } else if (((DB::table('porteurs')->where('Email', $request->get("MailLog"))->count()) == 1)) {
                    return redirect()->route('landingPort');
                }
            } else {
                return redirect()->route('connect')->withErrors(['ErreurLogin' => 'L\'email ou le mot de passe est incorrect.']);
            }
        } else {
            //they sent their username instead 
            if (Auth::attempt(['Login' => $request->get('MailLog'), 'password' => $request->get('password')])) {
                if (((DB::table('realisateur_projets')->where('Login', $request->get("MailLog"))->count()) == 1)) {
                    return redirect()->route('landingRea');
                } else if (((DB::table('porteurs')->where('Login', $request->get("MailLog"))->count()) == 1)) {
                    return redirect()->route('landingPort');
                }
            } else {
                return redirect()->route('connect')->withErrors(['ErreurLogin' => 'Le login ou le mot de passe est incorrect.']);
            }
        }
    }
}
