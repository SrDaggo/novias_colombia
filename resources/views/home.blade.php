@extends('layouts.app')

@section('content')
@guest
<div class="container">
    <a href="{{ route('login') }}">login</a>
    <a href="{{ route('register') }}">register</a>
</div>
@endguest
@auth
Bienvenido {{ auth()->user()->name }}

<a href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
    Salir</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
</form>
@endauth

@endsection
