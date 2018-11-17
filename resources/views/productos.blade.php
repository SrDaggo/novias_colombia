@extends('layouts.app')

@section('title', 'Productos')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
@endsection
@section('content')
<div class="section fondo">
    <div class="container">
        <div class="columns is-multiline content has-text-centered has-text-brown">
            <div class="column is-4">
                <a data-title="Cuadrada por 1 Unidad 225 G" href="{{ asset('/images/productos/pro_1.jpg') }}" data-lightbox="prod"><img src="{{ asset('/images/productos/pro_1.jpg') }}"></a>
                <p class="title has-text-brown is-size-4">Cuadrada por 1 Unidad
                <br>225 G</p>
            </div>
            <div class="column is-4">
                <a data-title="Cuadrada por 1 Unidad 450 G" href="{{ asset('/images/productos/pro_2.jpg') }}" data-lightbox="prod"><img src="{{ asset('/images/productos/pro_2.jpg') }}"></a>
                <p class="title has-text-brown is-size-4">Cuadrada por 1 Unidad
                <br>450 G</p>
            </div>
            <div class="column is-4">
                <a data-title="Panela Partida 1.000 G" href="{{ asset('/images/productos/pro_3.jpg') }}" data-lightbox="prod"><img src="{{ asset('/images/productos/pro_3.jpg') }}"></a>
                <p class="title has-text-brown is-size-4">Panela Partida
<br>1.000 G</p>
            </div>
            <div class="column is-4">
                <a data-title="Panela Pulverizada 1.500G" href="{{ asset('/images/productos/pro_4.jpg') }}" data-lightbox="prod"><img src="{{ asset('/images/productos/pro_4.jpg') }}"></a>
                <p class="title has-text-brown is-size-4">Pastilla Pulverizada
<br>1.500 G</p>
            </div>
            <div class="column is-4">
                <a data-title="Pastilla 1.000G" href="{{ asset('/images/productos/pro_5.jpg') }}" data-lightbox="prod"><img src="{{ asset('/images/productos/pro_5.jpg') }}"></a>
                <p class="title has-text-brown is-size-4">Pastilla
<br>1.000 G</p>
            </div>
            <div class="column is-4">
                <a data-title="Pastilla Circular 1.000GR" href="{{ asset('/images/productos/pro_6.jpg') }}" data-lightbox="prod"><img src="{{ asset('/images/productos/pro_6.jpg') }}"></a>
                <p class="title has-text-brown is-size-4">Panelin Circular
<br>1.000 GR</p>
            </div>
            <div class="column is-4">
                <a data-title="Pastilla X2 Unidades 500 G" href="{{ asset('/images/productos/pro_7.jpg') }}" data-lightbox="prod"><img src="{{ asset('/images/productos/pro_7.jpg') }}"></a>
                <p class="title has-text-brown is-size-4">Pastilla X2 Unidades
<br>500 G</p>
            </div>
            <div class="column is-4">
                <a data-title="Pastilla X2 Unidades 1.000 G" href="{{ asset('/images/productos/pro_8.jpg') }}" data-lightbox="prod"><img src="{{ asset('/images/productos/pro_8.jpg') }}"></a>
                <p class="title has-text-brown is-size-4">Pastilla X2 Unidades
<br>1.000 G</p>
            </div>
            <div class="column is-4">
                <a data-title="Pastilla X 12 Unidades 3.000 G" href="{{ asset('/images/productos/pro_9.jpg') }}" data-lightbox="prod"><img src="{{ asset('/images/productos/pro_9.jpg') }}"></a>
                <p class="title has-text-brown is-size-4">Pastilla X 12 Unidades
<br>3.000 G</p>
            </div>
            <div class="column is-4">
                <a data-title="Pastilla X 12 Unidades 3.000 G" href="{{ asset('/images/productos/pro_10.jpg') }}" data-lightbox="prod"><img src="{{ asset('/images/productos/pro_10.jpg') }}"></a>
                <p class="title has-text-brown is-size-4">Pastilla X 12 Unidades
<br>3.000 G</p>
            </div>
        </div>
    </div>
</div>
<div class="parallax" style="background-image: url('{{ asset("/images/parallax/parallax_2.jpg") }}');"></div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.min.js"></script>
<script>
lightbox.option({
    'disableScrolling': false
})
</script>
@endsection