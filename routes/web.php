<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('Maquette Connexion.connexion');
})->name('connect');
Route::get('ourTeam', function () {
    return view('Maquette Notre_equipe.section_equipe');
});
Route::get('SubscribePortProjet', 'PorteurController@index')->name('PortProjetSub');
Route::get('SubscribeOrga', function () {
    return view('Maquette InscriptionOrganisation.SubscribeOrganisation');
});
Route::get('SubscribeReaProjet', function () {
    return view('Maquette InscriptionReaProjet.SubscribeReaProjet');
});
Route::get('Forgot', function () {
    return view('Maquette MdpForgot.mdpForgot');
});
Route::get('mentionLegal', function () {
    return view('maquette mention légale.mentionLegal');
});
Route::get('landingRea', function () {
    return view('maquette landing_rea.landing_rea');
});
Route::get('landingPor', function () {
    return view('maquette landing_porteur.landing_por');
});
Route::get('Contact', function () {
    return view('maquette contact.contact');
});
Route::resource('Porteur','PorteurController');