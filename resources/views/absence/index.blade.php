@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
          <div class="col-md-12">

          
          @if(session()->has('success'))
                  <div class="alert alert-success">
                 {{ session()->get('success') }}

                  </div>
                 @endif
 
          <h1> Les Absences</h1>
          
          <div class="pull-right">
          <a href="{{ url('absences/create') }}" class="btn btn-success">Ajouter une absence  </a>
          </div>

            <table class="table">
             <head>
              <tr>
                  <th>Nom Et Prénom</th>
                  <th>Matiére</th>
                  <th>Heure d'Absence</th>
                  <th>Date</th>
                  <th>Action</th>

              </tr>
            </head>
              <body>
              @foreach($absences as $absence)
              <tr>
                  <td>{{ $absence->nom_et_prenom }}</td>
                  <td>{{ $absence->matiere }}</td>
                  <td>{{ $absence->heure_absence }}</td>
                  <td>{{ $absence->created_at }}</td>
                  <td>
                  <form action=  "{{ url('absences/'.$absence->id) }}" method="post">
                
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                         
                  <a href="" class ="btn btn-primary">Details</a>
                  <a href="{{ url('absences/'.$absence->id.'/edit') }}" class ="btn btn-default">Editer</a>
 
                  <button  type='submit' class ="btn btn-danger">Supprimer</button>
                  
                </form>
                  
                  </td>
              </tr>
                @endforeach
              </body>
          </table>
        </div>
    </div>
</div>          
@endsection