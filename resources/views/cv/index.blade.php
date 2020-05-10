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
                 
 
          <h1> La liste de mes Cv </h1>
          <div class="pull-right">
          <a href="{{ url('cvs/create') }}" class="btn btn-success">Nouveau cv </a>
          </div>
          <div class="row" >
          @foreach($cvs as $cv)
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail"  >
      <img src="{{ asset('storage/'.$cv->photo) }}" alt="Bootstrap" class="img-thumbnail">
      <div class="caption">
        <h3>{{ $cv->titre }}</h3>
        <p>...</p>
        <p>
        <form action=  "{{ url('cvs/'.$cv->id) }}" method="post">
                
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
        <a href="{ {url('cvs/'.$cv->id) }}" class="btn btn-primary" role="button">show</a>
        
         <a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-warning" role="button">editer</a>
         <button type="submit" class="btn btn-danger" role="button">supprimer</button>
         </form>
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
