@extends('layouts.app')

@section('title', 'Proceso')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
@endsection
@section('content')
<section class="section fondo">
    <div class="container">
        <div class="columns is-multiline">

            <div class="column is-6">
                <a href="{{ asset("/images/gal/1.jpg") }}" data-lightbox="proceso"><img src="{{ asset("/images/gal/1.jpg") }}"></a>
                <p>Siembra de Caña de Azúcar</p>
            </div>
            <div class="column is-6">
                <a href="{{ asset("/images/gal/2.jpg") }}" data-lightbox="proceso"><img src="{{ asset("/images/gal/2.jpg") }}"></a>
                <p>Cañales</p>
            </div>
            <div class="column is-6">
                <a href="{{ asset("/images/gal/3.jpg") }}" data-lightbox="proceso"><img src="{{ asset("/images/gal/3.jpg") }}"></a>
                <p>Apronte o Recolección de Cañas</p>
            </div>
            <div class="column is-6">
                <a href="{{ asset("/images/gal/4.jpg") }}" data-lightbox="proceso"><img src="{{ asset("/images/gal/4.jpg") }}"></a>
                <p>Planta de Producción Panelera</p>
            </div>
            <div class="column is-6">
                <a href="{{ asset("/images/gal/5.jpg") }}" data-lightbox="proceso"><img src="{{ asset("/images/gal/5.jpg") }}"></a>
                <p>Molino</p>
            </div>
            <div class="column is-6">
                <a href="{{ asset("/images/gal/6.jpg") }}" data-lightbox="proceso"><img src="{{ asset("/images/gal/6.jpg") }}"></a>
                {{--<p>Molino</p>--}}
            </div>
            <div class="column is-6">
                <a href="{{ asset("/images/gal/7.jpg") }}" data-lightbox="proceso"><img src="{{ asset("/images/gal/7.jpg") }}"></a>
                <p>Deshidratación de Jugos de Caña de Azúcar y Punto de Miel</p>
            </div>
            <div class="column is-6">
                <a href="{{ asset("/images/gal/8.jpg") }}" data-lightbox="proceso"><img src="{{ asset("/images/gal/8.jpg") }}"></a>
                {{--<p>Deshidratación de Jugos de Caña de Azúcar y Punto de Miel</p>--}}
            </div>
            <div class="column is-6">
                <a href="{{ asset("/images/gal/9.jpg") }}" data-lightbox="proceso"><img src="{{ asset("/images/gal/9.jpg") }}"></a>
                <p>Moldero</p>
            </div>
            <div class="column is-6">
                <a href="{{ asset("/images/gal/10.jpg") }}" data-lightbox="proceso"><img src="{{ asset("/images/gal/10.jpg") }}"></a>

            </div>
            <div class="column is-6">
                <a href="{{ asset("/images/gal/11.jpg") }}" data-lightbox="proceso"><img src="{{ asset("/images/gal/11.jpg") }}"></a>

            </div>
            <div class="column is-6">
                <a href="{{ asset("/images/gal/12.jpg") }}" data-lightbox="proceso"><img src="{{ asset("/images/gal/12.jpg") }}"></a>

            </div>
            <div class="column is-6">
                <a href="{{ asset("/images/gal/13.jpg") }}" data-lightbox="proceso"><img src="{{ asset("/images/gal/13.jpg") }}"></a>
            <p>Empaque</p>
            </div>
            <div class="column is-6">
                <a href="{{ asset("/images/gal/14.jpg") }}" data-lightbox="proceso"><img src="{{ asset("/images/gal/14.jpg") }}"></a>

            </div>

        </div>
        
    </div>

</section>
<div class="parallax" style="background-image: url('{{ asset("/images/parallax/parallax_4.jpg") }}');"></div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.min.js"></script>
    <script>
        lightbox.option({
            'disableScrolling': true
        })
    </script>
@endsection