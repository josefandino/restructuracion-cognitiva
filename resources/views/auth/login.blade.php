@extends('layouts.general')

@section('content')
<div class="usuario">
    <div class="box-welcome">
        
        <div class="card">
            <div class="card-header"><h3 class="text-center">{{ __('Login') }}</h3></div>
    
            <div class="card-body py-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
    
                    <div class="form-group row">
    
                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
    
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group row">
    
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
    
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-dark btn-block">
                                {{ __('Login') }}
                            </button>
    
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<div class="bgimg">
    <img src="{{ asset('img/register.jpg') }}" alt="">
</div>

    
@endsection
