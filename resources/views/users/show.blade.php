@extends('layouts.app')

@section('content')

<h1>{{ $user->name }}</h1>
<br>
{{ $user->departamento->departamento }},{{ $user->municipio->municipio }}
<br>
<a href="{{ url('user/'.$user->id.'/edit') }}">Editar</a>

@endsection
