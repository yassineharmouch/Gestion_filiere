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
 
          <h1> La liste de mes Cours </h1>
          <div class="pull-right">
          <a href="{{ url('cours/create') }}" class="btn btn-success">Nouveau cour </a>
          </div>
          <div class="row" >
          @foreach($cours as $cour)
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail"  >
      <img src="{{ asset('storage/'.$cour->photo) }}" alt="Bootstrap" class="img-thumbnail">
      <div class="caption">
        <h3>{{ $cour->titre }}</h3>
        <p>...</p>
        <p>
        
         <a href="{{ url('cours/'.$cour->id.'/edit') }}" class="btn btn-warning" role="button">editer</a>
         <button type="submit" class="btn btn-danger" role="button">supprimer</button>
         </p>
      </div>
    </div>
  </div>
  @endforeach
</div>
       
        </div>
    </div>
</div>  



@endsection
