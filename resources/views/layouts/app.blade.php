<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Inicio') | Panela Bella Vista</title>
    @yield('styles')
<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div id="app">
        @include('partials.menu')

        @yield('content')
        <div class="social">

            <a href="https://wa.me/57321%202117662?text=Buen%20d%C3%ADa,%20quisiera%20-m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20productos.%20Gracias" target="_blank">  <img src="{{asset('images/pedidos.svg')}}" alt="" class="image is-96x96">   </a>

        </div>
        @include('partials.footer')
    </div>
    <script async src="{{ asset('/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>