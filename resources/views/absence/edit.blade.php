@extends('layouts.app')

@section('content')

  
  <div class="container">
      <div class="row">
          <div class="col-md-12">

          <form action="{{ url('absences/'.$absence->id) }}" method="post" >
          <input type="hidden" name="_method" value="PUT">
         
            

            
         
          {{ csrf_field() }}

              <div class="form-group">
              <label for="">Nom Et Prenom </label>
              <input type="text"  name='nom_et_prenom' class="form-control" value="{{ $absence->nom_et_prenom }}">
              </div>

              <div class="form-group">
              <label > Matiére</label>
              <input  name='matiere ' class="form-control" value="{{ $absence->matiere }}" >
              </div>


              <div class="form-group">
              <label for="">Heure d'Absence</label>
              <input type="text"  name='heure_absence' class="form-control" value="{{ $absence->heure_absence }}">
              </div>




                <div class="form-group">
              <input type="submit"  class="form-control btn btn-danger " value="Modifier">
              </div>
          </form>
          </div>
      </div>
    </div>


@endsection