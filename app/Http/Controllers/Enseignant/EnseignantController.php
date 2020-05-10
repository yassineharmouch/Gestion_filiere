<?php

namespace App\Http\Controllers\Enseignant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnseignantController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:enseignant');
    }

    public function index(){
        return view('enseignant.home');
    }
}
