@extends('layouts.base-login')

@section('content')


<form method="POST" action="{{ route('login') }}">
    @csrf


    <label for="email" class="">Email</label>


    <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required autofocus>

    @if ($errors->has('email'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif


    <br>
    <label for="password" class="">Password</label>


    <input id="password" type="password" class="" name="password" required>

    @if ($errors->has('password'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif

    <br>

    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

    <label class="form-check-label" for="remember"> Remember Me</label>
    <br>

    <button type="submit" class=""> Login</button>
    <br>

    <a class="" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
    <br>
    <a href="{{ url('/register') }}">No tienes una cuenta? registrate</a>
    <br>


</form>

@endsection
