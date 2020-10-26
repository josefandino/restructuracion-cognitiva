@extends('layouts.app')

@section('content')
<div class="pages">


   <div class="chilPages">
      <form class="form" action="{{ route('thought.update', $thought->id) }}" method="POST">
         @csrf
         @method('PATCH')

         <div class="boxInput">
            <label for="uno"> <b> A - </b> Eventor activador </label>
            <input class="form-control" type="text" 
            name="uno" 
            value="{{ $thought->uno }}"
            >
            <p class="text-danger text-center "><strong>{{ $errors->first('uno') }}</strong></p>
         </div>

         <div class="boxInput">
            <label for="dos"> <b> B - </b> Pensamiento </label>
            <input class="form-control" type="text" 
            name="dos" 
            value="{{ $thought->dos}}"
            >
            <p class="text-danger text-center ">
               <strong>{{ $errors->first('dos') }}</strong></p>
         </div>

         <div class="boxInput">
            <label for="tres"> Distorción cognitiva </label>
            <input class="form-control" type="text" 
            name="tres" 
            value="{{ $thought->tres }}"
            >
            <p class="text-danger text-center ">
               <strong>{{ $errors->first('tres') }}</strong></p>
         </div>


         <div class="boxInput">
            <label for="cuatro"> <b> C - </b> Reacción afectiva - conductual </label>
            <input class="form-control" type="text" 
            name="cuatro" 
            value="{{ $thought->cuatro }}"
            >
            <p class="text-danger text-center ">
               <strong>{{ $errors->first('cuatro') }}</strong></p>
         </div>

         <div class="boxInput">
            <label for="cinco"> <b> D - </b> Debate </label>
            <input class="form-control" type="text" 
            name="cinco" 
            value="{{ $thought->cinco}}"
            >
            <p class="text-danger text-center ">
               <strong>{{ $errors->first('cinco') }}</strong></p>
         </div>

         <div class="boxInput">
            <label for="seis"> <b> E - </b> Pensamiento alternativo </label>
            <input class="form-control" type="text" 
            name="seis" 
            value="{{ $thought->seis}}"
            >
            <p class="text-danger text-center ">
               <strong>{{ $errors->first('seis') }}</strong></p>
         </div>


            <div class="boxInput mb-5">
               <button class="btn btn-success btn-block" type="submit">
                  <i class="fas fa-plus">&nbsp;</i>
                  Actaulizar datos </button>
            <a href="{{ route('thought') }}" class="btn btn-danger float-right mt-1">
               <i class="fas fa-window-close"> &nbsp; </i> Cancelar
            </a>
            </div>

   </div>

</div>



@endsection
