<?php

namespace App\Http\Controllers\Etudiant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class EtudiantController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:etudiant');
    }

    public function index(){
        return view('etudiant.home');
    }
    public function emploi(){
        return view('etudiant.emploi');
    }
    /* cette fonction return les notes d'un etudiant*/ 
    public function notes(){
        return view('etudiant.notes');
    }
    /* cette fonction affiche les offres poster par une entreprise*/ 
    public function offres(){
        return view('etudiant.offres');
    }
     /* cette fonction affiche les messages */ 
     public function messages(){
        return view('etudiant.offres');
    }

       /* cette fonction affiche les cours */ 
       public function cours(){
        return view('etudiant.cours');
    }
}
