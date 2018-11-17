@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<swiper :options="slide">
        <!-- slides -->
    <swiper-slide><img  src="{{ asset('/images/slides/sli_1.jpg') }}" class="fullwidth"></swiper-slide>
    <swiper-slide><img src="{{ asset('/images/slides/sli_2.jpg') }}" class="fullwidth"></swiper-slide>
    <swiper-slide><img src="{{ asset('/images/slides/sli_3.jpg') }}" class="fullwidth"></swiper-slide>
</swiper>
<div class="container">

<swiper :options="slide2" style="margin: 30px;" class="is-hidden-mobile">
        <!-- slides -->
    @for ($i = 1; $i <= 10; $i++)
    <swiper-slide><a href="/productos"><img class="image" src="{{ asset("/images/slides/prin_$i.jpg") }}" style="height: 230px;"></a></swiper-slide>
    @endfor
</swiper>
</div>

<div class="container section fondo">
    <div class="columns is-multiline">
        <div class="column is-4 content has-text-justified">
        <img src="{{ asset('/images/iconos/logo_1.svg') }}" class="image" style="width: 50%; left: 25%">
            <p class="subtitle has-text-centered">Innovación</p>
            <p>Constante creación y desarrollo de nuevos
                productos, teniendo en cuenta los avances
                tecnológicos aplicables a los procesos de caña
                de azúcar. Con la finalidad de incrementar la
                productividad y competitividad de nuestras
                operacione.</p>
        </div>
        <div class="column is-4 content has-text-justified">
            <img src="{{ asset('/images/iconos/logo_2.svg') }}" class="image" style="width: 50%; left: 25%">
            <p class="subtitle has-text-centered">Cultura de calidad</p>
            <p>
                A través de la mejora continua alcanzar los más
                altos estándares en nuestros productos,
                garantizando las mejores prácticas
                de manufactura, cumpliendo la normatividad
                aplicable, para impactar de manera positiva a
                nuestros clientes.
            </p>
        </div>
        <div class="column is-4 content has-text-justified">
            <img src="{{ asset('/images/iconos/logo_3.svg') }}" class="image" style="width: 50%; left: 25%">
            <p class="subtitle has-text-centered">Ambientalmente responsables</p>
            <p>     Garantizar que nuestros procesos sean
                    amigables con el medio ambiente, buscando
                    cada vez más implementar acciones correctivas o
                    de mejora frente a la emisión de gases y residuos
                    tóxicos.
            </p>
        </div>
        <div class="column is-4 content has-text-justified">
            <img src="{{ asset('/images/iconos/logo_4.svg') }}" class="image" style="width: 50%; left: 25%">
            <p class="subtitle has-text-centered">Responsabilidad social
                    con la comunidad</p>
            <p>
                Ser partícipes en las iniciativas y proyectos de la
                colectividad, generando cercanía y diálogo
                abierto frente a cualquier recomendación en el
                desarrollo de nuestros procesos.
            </p>
        </div>
        <div class="column is-4 content has-text-justified has-text-centered">
            <img src="{{ asset('/images/iconos/logo_5.svg') }}" class="image" style="width: 50%; left: 25%">

            <p class="subtitle has-text-centered">Desarrollo y Bienestar del recurso humano</p>
            <p>
                Proporcionar un ambiente sano y seguro para
                nuestros colaboradores, velando por una
                retribución justa, promoviendo su crecimiento a
                través del entrenamiento y desarrollo profesional
                y social.
            </p>
        </div>
    </div>
</div>
<div class="parallax image" style="background-image: url('{{ asset("/images/parallax/parallax_1.jpg") }}');"></div>

@endsection

@section('styles')
<style>
    /*.image {*/
        /*margin: 0 auto;*/
        /*max-height: 200px;*/
        /*margin-bottom: 10px;*/
    /*}*/
</style>
@endsection