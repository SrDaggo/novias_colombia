@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('register') }}">
    @csrf

    <label for="name" class="">Nombre</label>
    <input id="name" type="text" class="" name="name" value="{{ old('name') }}" required autofocus>

    @if ($errors->has('name'))
    <span class="" role="alert">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
    <br>

    <label for="email" class="">Correo</label>
    <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required>

    @if ($errors->has('email'))
    <span class="" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
    <br>

    <label for="password" class="">Contraseña</label>
    <input id="password" type="password" class="" name="password" required>

    @if ($errors->has('password'))
    <span class="" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
    <br>

    <label for="password-confirm" class="">Confirmar contraseña</label>
    <input id="password-confirm" type="password" class="" name="password_confirmation" required>
    <br>

    <label for="marrige_date" class="">Fecha de matrimonio</label>
    <input id="marrige_date" type="date" class="" name="marrige_date" value="" required autofocus>

    @if ($errors->has('marrige_date'))
    <span class="" role="alert">
        <strong>{{ $errors->first('marrige_date') }}</strong>
    </span>
    @endif

    <br>
    <label for="gender" class="">Soy</label>
    <input id="" type="radio" class="" name="gender" value="male" required autofocus>Novio
    <input id="" type="radio" class="" name="gender" value="female" required autofocus>Novia
    <input id="" type="radio" class="" name="gender" value="other" required autofocus>Otros

    @if ($errors->has('gender'))
    <span class="" role="alert">
        <strong>{{ $errors->first('gender') }}</strong>
    </span>
    @endif
    <br>

    <label for="departamento" class="">Departamento</label>
    <select name="departamento" id="select-departamento">
        <option value="">Seleccione uno</option>
        @foreach ($departamentos as $departamento)
        <option value="{{ $departamento->id_departamento }}">{{ $departamento->departamento }}</option>
        @endforeach
    </select>
    <br>

    @if ($errors->has('departamento'))
    <span class="" role="alert">
        <strong>{{ $errors->first('departamento') }}</strong>
    </span>
    @endif

    <label for="municipio" class="">municipio</label>
    <select name="municipio" id="select-municipio">
        <option value="">Seleccione uno</option>
    </select>
    <br>
    <br>

    @if ($errors->has('municipio'))
    <span class="" role="alert">
        <strong>{{ $errors->first('municipio') }}</strong>
    </span>
    @endif

    <button type="submit" class="">
        Registrarse
    </button>

</form>

@endsection

@section('scripts')
<script src="{{ asset('js/depending_selectors.js') }}"></script>
@endsection
