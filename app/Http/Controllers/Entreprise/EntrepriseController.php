<?php

namespace App\Http\Controllers\Entreprise;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EntrepriseController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:entreprise');
    }

    public function index(){
        return view('entreprise.home');
    }
}

