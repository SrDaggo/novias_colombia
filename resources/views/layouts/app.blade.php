<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        @yield('aditional_scripts')
        <!-- Fonts -->

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('aditional_styles')



        {{-- Si el usuario no se ha logeado mostrar login y registro a menos que este en el login--}}
        @guest
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Registrase</a>
        @endguest

        {{-- En caso de que se haya logeado mostrar el logout --}}
        @auth

        <a href="{{ url('user/'. auth()->user()->id) }}">{{ auth()->user()->name }}</a>


        {{-- Botón de logout INICIO --}}
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
            Salir</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
        {{-- Botón de logout FIN --}}

        <a href="{{ route('task.index') }}">Tareas</a>

        {{-- FALTA MIDDLEWARE --}}
        {{-- <a href="{{ route('taskCategory.index') }}">editar categorias</a>
        <a href="{{ route('taskDate.index') }}">editar fechas de inicio</a> --}}

        @endauth


    </head>

    <body>
        @yield('content')

    </body>

</html>
