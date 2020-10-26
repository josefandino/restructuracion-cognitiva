@extends('layouts.app')

@section('content')
<div class="pages">

   <div class="col-sm-6 text-center">
      @if(session()->get('success'))
         <div class="alert alert-success">
            {{ session()->get('success') }}  
         </div>
      @endif
   </div>

   <div class="chilPages">

      
      @include('Partials.sessions_status')
      
      <form class="form" action="{{ route('thought.store') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <h3 class="text-center">Modelo ABCDE</h3>

            <div class="boxInput">
               <label for="uno"> <b> A - </b> Eventor activador </label>
               <input class="form-control" type="text" 
               name="uno" 
               value="{{ old('uno') }}"
            >
            <p class="text-danger text-center "><strong>{{ $errors->first('uno') }}</strong></p>
            </div>

            <div class="boxInput">
               <label for="dos"> <b> B - </b> Pensamiento </label>
               <input class="form-control" type="text" 
               name="dos" 
               value="{{ old('dos') }}"
               >
               <p class="text-danger text-center ">
                  <strong>{{ $errors->first('dos') }}</strong></p>
            </div>

            <div class="boxInput">
               <label for="tres"> Distorción cognitiva </label>
               <input class="form-control" type="text" 
               name="tres" 
               value="{{ old('tres') }}"
               >
               <p class="text-danger text-center ">
                  <strong>{{ $errors->first('tres') }}</strong></p>
            </div>


            <div class="boxInput">
               <label for="cuatro"> <b> C - </b> Reacción afectiva - conductual </label>
               <input class="form-control" type="text" 
               name="cuatro" 
               value="{{ old('cuatro') }}"
               >
               <p class="text-danger text-center ">
                  <strong>{{ $errors->first('cuatro') }}</strong></p>
            </div>

            <div class="boxInput">
               <label for="cinco"> <b> D - </b> Debate </label>
               <input class="form-control" type="text" 
               name="cinco" 
               value="{{ old('cinco') }}"
               >
               <p class="text-danger text-center ">
                  <strong>{{ $errors->first('cinco') }}</strong></p>
            </div>

            <div class="boxInput">
               <label for="seis"> <b> E - </b> Pensamiento alternativo </label>
               <input class="form-control" type="text" 
               name="seis" 
               value="{{ old('seis') }}"
               >
               <p class="text-danger text-center ">
                  <strong>{{ $errors->first('seis') }}</strong></p>
            </div>

            <div class="boxInput mb-5">
               <button class="btn btn-success btn-block" type="submit">
                  <i class="fas fa-plus">&nbsp;</i>
                  Agregar </button>
            <a href="{{ route('thought') }}" class="btn btn-danger float-right mt-1">
               <i class="fas fa-window-close"> &nbsp; </i> Cancelar
            </a>
            </div>
            
         </form>

      

   </div>

</div>



@endsection
