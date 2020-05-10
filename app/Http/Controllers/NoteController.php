<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Http\Requests\noteRequest;

class NoteController extends Controller
{
    public function index() {
        $listenote = Note::all();
        return view('note.index', ['notes' => $listenote]);
        
  
        

    }
    public function create() {
        return view('note.create');
    }

    public function store(noteRequest $request) {
        $note = new Note();
        $note->nom_et_prenom = $request->input('nom_et_prenom');
        $note->matiere = $request->input('matiere');
        $note->semestre = $request->input('semestre');
        $note->note_finale = $request->input('note_finale');
      
        $note->save();
        session()->flash('success' , 'la note à été bien enregistré !!');

        return redirect('notes');
    }
     
    public function edit ($id) {
        $note = Note::find ($id);
        return view('note.edit', [ 'note' => $note ]);

        
    }
    public function update(noteRequest $request , $id) {
        $note = Note::find($id);
        $note->nom_et_prenom = $request->input('nom_et_prenom');
        $note->matiere = $request->input('matiere');
        $note->semestre = $request->input('semestre');
        $note->note_finale = $request->input('note_finale');
        $note->save();
        return redirect('notes');
    }

    public function destroy(Request $request ,$id) {
        $note = Note::find($id);
        $note->delete();
        return redirect ('notes');
       
       
    }
}
