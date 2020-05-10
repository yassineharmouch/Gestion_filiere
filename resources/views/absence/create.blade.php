@extends('layouts.app')

@section('content')


  <div class="container">
      <div class="row">
          <div class="col-md-12">

          <form action="{{ url('absences') }}" method="Post" >

          {{ csrf_field() }}

              <div class="form-group  @if($errors->get('nom_et_prenom')) has-error @endif" >
              <label for=""> Nom Et Prénom </label>
              <input type="text"  name='nom_et_prenom' class="form-control" value="{{ old ('nom_et_prenom') }}" >
              @if($errors->get('nom_et_prenom'))
                    @foreach($errors->get('nom_et_prenom') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    
              </div>

              <div class="form-group  @if($errors->get('matiere')) has-error @endif">
              <label for="">matiere</label>
              <input type="text" name='matiere' class="form-control" value="{{ old ('matiere') }}">
              @if($errors->get('matiere'))
                    @foreach($errors->get('matiere') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif   
                </div> 
              

                <div class="form-group  @if($errors->get('heure_absence')) has-error @endif" >
              <label for=""> Heure d'Absence </label>
              <input type="text"  name='heure_absence' class="form-control" value="{{ old ('heure_absence') }}" >
              @if($errors->get('heure_absence'))
                    @foreach($errors->get('heure_absence') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    

                </div>
                


              <div class="form-group">
             
              <input type="submit"  class="form-control btn btn-primary " value="Enregistrer">
              </div>
          </form>
          </div>
      </div>
  </div>



@endsection