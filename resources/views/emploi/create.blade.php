@extends('layouts.app')

@section('content')


  <div class="container">
      <div class="row">
          <div class="col-md-12">

          <form action="{{ url('emplois') }}" method="Post" >

          {{ csrf_field() }}

              <div class="form-group  @if($errors->get('jour')) has-error @endif" >
              <label for=""> Jour </label>
              <input type="text"  name='jour' class="form-control" value="{{ old ('jour') }}" >
              @if($errors->get('jour'))
                    @foreach($errors->get('jour') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    
              </div>

              
              

             
                <div class="form-group  @if($errors->get('premiere_sceance')) has-error @endif" >
              <label for=""> premiere séance </label>
              <input type="text"  name='premiere_sceance' class="form-control" value="{{ old ('premiere_sceance') }}" >
              @if($errors->get('premiere_sceance'))
                    @foreach($errors->get('premiere_sceance') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    
             

                </div>


                <div class="form-group  @if($errors->get('deux_sceance')) has-error @endif" >
              <label for=""> Deuxiéme séance </label>
              <input type="text"  name='deux_sceance' class="form-control" value="{{ old ('deux_sceance') }}" >
              @if($errors->get('deux_sceance'))
                    @foreach($errors->get('deux_sceance') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    
             

                </div>


                <div class="form-group  @if($errors->get('troi_sceance')) has-error @endif" >
              <label for=""> troisiéme séance </label>
              <input type="text"  name='troi_sceance' class="form-control" value="{{ old ('troi_sceance') }}" >
              @if($errors->get('troi_sceance'))
                    @foreach($errors->get('troi_sceance') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    
             

                </div>
                       

                <div class="form-group  @if($errors->get('quatre_sceance')) has-error @endif" >
              <label for=""> quatriéme séance </label>
              <input type="text"  name='quatre_sceance' class="form-control" value="{{ old ('quatre_sceance') }}" >
              @if($errors->get('quatre_sceance'))
                    @foreach($errors->get('quatre_sceance') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    
             

                </div>
                       
                       



                 <div class="form-group  @if($errors->get('Anneés_scolaire')) has-error @endif" >
              <label for=""> Anneés scolaire </label>
              <input type="text"  name='Anneés_scolaire' class="form-control" value="{{ old ('Anneés_scolaire') }}" >
              @if($errors->get('Anneés_scolaire'))
                    @foreach($errors->get('Anneés_scolaire') as $message)
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