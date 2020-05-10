<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emploi;
use App\Http\Requests\emploiRequest;

class EmploiController extends Controller
{
    public function index() {
        $listeemploi = Emploi::all();
        return view('emploi.index', ['emplois' => $listeemploi]);
        
  
        

    }
    public function create() {
        return view('emploi.create');
    }

    public function store(emploiRequest $request) {
        $emploi = new Emploi();
        $emploi->jour = $request->input('jour');
       
        
        $emploi->premiere_sceance = $request->input('premiere_sceance');
        $emploi->deux_sceance = $request->input('deux_sceance');
        $emploi->troi_sceance = $request->input('troi_sceance');
        $emploi->quatre_sceance = $request->input('quatre_sceance');
        $emploi->Anneés_scolaire = $request->input('Anneés_scolaire');
      
        $emploi->save();
        session()->flash('success' , 'la emploi à été bien enregistré !!');

        return redirect('emplois');
    }
     
    public function edit ($id) {
        $emploi = Emploi::find ($id);
        return view('emploi.edit', [ 'emploi' => $emploi ]);

        
    }
    public function update(emploiRequest $request , $id) {
        $emploi = Emploi::find($id);
        $emploi->jour = $request->input('jour');
        
        
        $emploi->premiere_sceance = $request->input('premiere_sceance');
        $emploi->deux_sceance = $request->input('deux_sceance');
        $emploi->troi_sceance = $request->input('troi_sceance');
        $emploi->quatre_sceance = $request->input('quatre_sceance');
        $emploi->Anneés_scolaire = $request->input('Anneés_scolaire');
        $emploi->save();
        return redirect('emplois');
    }

    public function destroy(Request $request ,$id) {
        $emploi = Emploi::find($id);
        $emploi->delete();
        return redirect ('emplois');
       
       
    }
}
