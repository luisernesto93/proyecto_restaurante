@extends('auth.layouts.app')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="text-center mt-5">
        <h1 class="text-white">Bienvenido al Panel de Administración</h1>
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Iniciar Sesión</h1>
        </div>
 
        @if (session('error'))
        <span class="text-danger"> {{ session('error') }}</span>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electrónico">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button class="btn btn-primary btn-user btn-block">
                Iniciar Sesión
            </button>
        </form>
        <img src="{!! asset('images/fondo.jpg') !!}" alt="Logo" class="img-fluid">
    </div>

    

    <div class="text-center mt-5">
        <h6 class="text-white">Desarrollado Por : <a class="text-white" href="">MEL FARFAN</a></h6>
    </div>

</div>
@endsection