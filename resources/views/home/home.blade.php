@extends('layouts.panel')

@section('content')
@extends('includes.nav')

<div class="home">
    <div class="childHome">
        <a href="{{ route('mteTeologia') }}"><img src="{{ asset('img/carreras/carrera-01.PNG') }}" alt=""></a>
        <a href="{{ route('mteTeologia') }}"><img src="{{ asset('img/carreras/carrera-02.PNG') }}" alt=""></a>
        <a href="{{ route('mteTeologia') }}"><img src="{{ asset('img/carreras/carrera-03.PNG') }}" alt=""></a>
        <a href="{{ route('dreTeologia') }}"><img src="{{ asset('img/carreras/carrera-04.PNG') }}" alt=""></a>
        <a href="{{ route('mteTeologia') }}"><img src="{{ asset('img/carreras/carrera-05.PNG') }}" alt=""></a>
        <a href="{{ route('mteTeologia') }}"><img src="{{ asset('img/carreras/carrera-06.PNG') }}" alt=""></a>
        <a href="{{ route('licTeologia') }}"><img src="{{ asset('img/carreras/carrera-07.PNG') }}" alt=""></a>
        <a href="{{ route('mteTeologia') }}"><img src="{{ asset('img/carreras/carrera-08.PNG') }}" alt=""></a>
        <a href="{{ route('mteTeologia') }}"><img src="{{ asset('img/carreras/carrera-09.PNG') }}" alt=""></a>
        <a href="{{ route('mthDivinidades') }}"><img src="{{ asset('img/carreras/carrera-10.PNG') }}" alt=""></a>
        <a href="{{ route('mteTeologia') }}"><img src="{{ asset('img/carreras/carrera-11.PNG') }}" alt=""></a>        
    </div>
</div>

<main class="footer">
    @include('includes.footer')
  </main>
@endsection
