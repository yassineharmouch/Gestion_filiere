<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('accueil');//il y avait ici wellcome
});




Route::get('/home', 'HomeController@index');
Route::get('cvs' , 'CvController@index');
Route::get('cvs/create' , 'CvController@create');
Route::Post('cvs' , 'CvController@store');
Route::put('cvs/{id}' , 'CvController@update');
Route::get('cvs/{id}/edit' , 'CvController@edit');
Route::delete('cvs/{id}' , 'CvController@destroy');

Route::resource('notes' , 'NoteController');
Route::resource('cours' , 'CourController');
Route::resource('absences' , 'AbsenceController');
Route::resource('emplois' , 'EmploiController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Admin Auth route*/
Route::namespace('Admin')->group(function(){
   Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
   Route::post('/admin/login', 'Auth\LoginController@login');
   Route::get('/admin/home', 'AdminController@index')->name('admin.home');
   //Route::get('/admin/admin', 'AdminController@index')->name('admin.admin');
});

/*Etudiant Auth route*/
Route::namespace('Etudiant')->group(function(){
    Route::get('/etudiant/login', 'Auth\LoginController@showLoginForm')->name('etudiant.login');
    Route::post('/etudiant/login', 'Auth\LoginController@login');
    Route::get('/etudiant/home', 'EtudiantController@index')->name('etudiant.home');
    Route::get('/etudiant/emploi', 'EtudiantController@emploi')->name('etudiant.emploi');//la route pour l'emploi du temps
    Route::get('/etudiant/notes', 'EtudiantController@notes')->name('etudiant.notes');//il se peut qui a une partie dynamique pour la semestre
    Route::get('/etudiant/offres', 'EtudiantController@offres')->name('etudiant.offres');//pour les offres poster par l'entreprise
    Route::get('/etudiant/messages', 'EtudiantController@messages')->name('etudiant.messages');//pour l'envois et la reception des messages
    Route::get('/etudiant/cours', 'EtudiantController@cours')->name('etudiant.cours');//!!!!doit etre un partie dynamique qui determine la semestre
 });
 
 /*Entreprise Auth route*/
Route::group(['namespace'=>'Entreprise', 'prefix' => 'entreprise'], function(){
    
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('entreprise.login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/registre', 'Auth\RegisterController@showRegistreForm')->name('entreprise.registre');
    Route::post('/registre', 'Auth\RegisterController@Registre');
    Route::get('/home', 'EntrepriseController@index')->name('entreprise.home');
    Route::get('/annonce', 'AdController@create')->name('ad.create');
    Route::post('/annonce/create', 'AdController@store')->name('ad.store');
    //Route::get('/entreprise/annonce/create', 'AdController@store')->name('ad.store');
});

 /*Enseignant Auth route*/
    Route::namespace('Enseignant')->group(function(){
    Route::get('/enseignant/login', 'Auth\LoginController@showLoginForm')->name('enseignant.login');
    Route::post('/enseignant/login', 'Auth\LoginController@login');
    //::get('/enseignant/registre', 'Auth\LoginController@showLoginForm')->name('enseignant.login');
    //Route::post('/enseignant/registre', 'Auth\LoginController@login');
    Route::get('/enseignant/home', 'EnseignantController@index')->name('enseignant.home');
 });

 Route::post('RegisterUsers','Auth\RegisterUsersController@register')->name('RegisterUsers');
 