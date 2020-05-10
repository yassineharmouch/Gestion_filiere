<?php

namespace App\Http\Controllers;
use App\Cour;
use App\Http\Requests\courRequest;
use Illuminate\Http\UploadedFile;


use Illuminate\Http\Request;

class CourController extends Controller
{



    public function index() {
        $listecour = Cour::all();
        return view('cour.index', ['cours' => $listecour]);
        

    }
    public function create() {
        return view('cour.create');
    }

    public function store(courRequest $request) {
        $cour = new Cour();
        $cour->titre = $request->input('titre');
        $cour->presentation = $request->input('presentation');

        if( $request->hasFile('photo') ) {

            $cour->photo=$request->photo->store('image');
        }
        
        $cour->save();
        session()->flash('success' , 'le cour à été bien enregistré !!');
        return redirect('cours');
     
    }

    public function edit ($id) {
        $cour = Cour::find ($id);
        return view('cour.edit', [ 'cour' => $cour ]);

     
        
    }
    public function update(courRequest $request , $id) {
        $cour = Cour::find($id);
        $cour->titre = $request->input('titre');
        $cour->presentation = $request->input('presentation');
        if( $request->hasFile('photo') ) {

            $cour->photo=$request->photo->store('image');
        }
        $cour->save();
        return redirect('cours');
   
    }

    public function destroy(Request $request ,$id) {
        $cour = Cour::find($id);
        $cour->delete();
        return redirect ('cours');

       
        
       
        
    }

}

