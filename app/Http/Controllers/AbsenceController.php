<?php

namespace App\Http\Controllers;
use App\Absence;
use App\Http\Requests\absenceRequest;

use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    public function index() {
        $listeabsence = Absence::all();
        return view('absence.index', ['absences' => $listeabsence]);
        
  
        

    }
    public function create() {
        return view('absence.create');
    }

    public function store(absenceRequest $request) {
        $absence = new Absence();
        $absence->nom_et_prenom = $request->input('nom_et_prenom');
        $absence->matiere = $request->input('matiere');
        $absence->heure_absence = $request->input('heure_absence');
      
        $absence->save();
        session()->flash('success' , 'la absence à été bien enregistré !!');

        return redirect('absences');
    }
     
    public function edit ($id) {
        $absence = Absence::find ($id);
        return view('absence.edit', [ 'absence' => $absence ]);

        
    }
    public function update(absenceRequest $request , $id) {
        $absence = Absence::find($id);
        $absence->nom_et_prenom = $request->input('nom_et_prenom');
        $absence->matiere = $request->input('matiere');
        $absence->heure_absence = $request->input('heure_absence');
        $absence->save();
        return redirect('absences');
    }

    public function destroy(Request $request ,$id) {
        $absence = Absence::find($id);
        $absence->delete();
        return redirect ('absences');
       
       
    }
}
