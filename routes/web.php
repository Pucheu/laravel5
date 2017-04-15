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
Route::get('accueil', function () {
    return view('accueil');
});
Route::get('boutique', function () {
    return view('boutique');
});
Route::get('boutique_president', function () {
    return view('boutique_president');
});
Route::get('accueil/user', function () {
    return view('accueil_connecte');
});
Route::get('connexion', function () {
    return view('connexion');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('nom_evenement', function () {
    return view('detail_evenement');
});
Route::get('nom_evenement_bde', function () {
    return view('detail_evenement_modo');
});
Route::get('nom_photo', function () {
    return view('detail_photo');
});
Route::get('ajout_produit', function () {
    return view('formulaire_boutique');
});
Route::get('ajout_evenement', function () {
    return view('formulaire_evenement');
});
Route::get('galerie', function () {
    return view('galerie');
});
Route::get('inscription', function () {
    return view('inscription');
});
Route::get('evenement', function () {
    return view('liste_evenement');
});
Route::get('evenement/bde', function () {
    return view('liste_evenement_bde');
});
Route::get('mention', function () {
    return view('mention_legale');
});
Route::get('compte/nom_utilisateur', function () {
    return view('mon_compte');
});
Route::get('panier/nom_utilisateur', function () {
    return view('panier');
});