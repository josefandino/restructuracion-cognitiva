@extends('layouts.general')

@section('content')
<div class="usuario">
    <div class="box-welcome">
        <h1>Restructuración cognitiva</h1>
        <div class="btnLogin">
            @if (Route::has('login'))
               
                    @auth
                        <a class="ock btn-success" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="" href="{{ route('login') }}">Ingresar</a>

                        @if (Route::has('register'))
                            <a href=""></a>
                        @endif
                    @endauth
               
            @endif
        </div>
    </div>
</div>


<div class="bgimg">
    <img src="{{ asset('img/home.jpg') }}" alt="">
</div>
@endsection


