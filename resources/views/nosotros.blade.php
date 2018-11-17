@extends('layouts.app')

@section('title', 'Nosotros')
@section('content')
<swiper :options="slide">
        <!-- slides -->
    <swiper-slide><img src="{{ asset('/images/slides/sli_a.jpg') }}" class="fullwidth"></swiper-slide>
    <swiper-slide><img src="{{ asset('/images/slides/sli_b.jpg') }}" class="fullwidth"></swiper-slide>
    <swiper-slide><img src="{{ asset('/images/slides/sli_c.jpg') }}" class="fullwidth"></swiper-slide>
</swiper>

<section class="section content has-text-justified fondo">
    <div class="container">
        
        <div class="columns is-variable is-8">
            <div class="column is-6">
                <p class="subtitle">Nuestra Historia</p>
<p>
                Desde nuestro nacimiento en Mogotes en el año 2002, un municipio ubicado en
Santander (Colombia), hemos crecido con la idea de ofrecer a todos nuestros
clientes la alternativa de consumir uno de los alimentos más nutritivos y saludables,
la Panela. Este Alimento natural cuya base es el jugo de caña de azúcar, es
cultivado y producido con el mejor talento humano de la región, nuestros
campesinos. Quienes día a día con su experiencia y conocimientos agrícolas, de la
mano de un programa de capacitación y entrenamiento, logramos obtener la
mejor Panela Natural del país. Durante estos años nuestra empresa ha
implementado los desarrollos tecnológicos aplicables al mercado, buscando cada
vez más, ampliar nuestro portafolio de productos para satisfacer las necesidades
de nuestros consumidores. 
            </p>
            <p class="subtitle">Valores</p>
            <p>
                Confianza: Trabajando de la mano de nuestros colaboradores, buscando cada vez
más generar credibilidad de la calidad, dedicación y desarrollo de nuestro
producto, frente a nuestros clientes y consumidores.
            </p>
            <p>Responsabilidad: Ser conscientes de las decisiones y acciones que se realizan,
teniendo como único objetivo el desarrollo de nuestros colaboradores y
comunidad, respeto hacia nuestros clientes y hacia el medio ambiente.</p>
<p>Integridad: Ser transparentes en día a día con cada una de los actores o partes
intervinientes en el proceso. </p>
<p>Pasión: Disfrutar nuestra labor, sentirse orgullosos de nuestro trabajo y luchar día
a día en pro de la compañía para innovar y mejorar los productos que ofrecemos.</p>
<p>Transformación: Reinventarse a diario según las necesidades del mercado, el
medio ambiente y el consumidor, buscando ser una empresa socialmente
responsable. </p>
            </div>
            <div class="column is-6">
                <p class="subtitle">Misión</p>
                <p>
                    Ofrecer al mercado nacional e internacional la mejor panela del país,
desarrollándola en diferentes presentaciones y buscando ampliar el portafolio de
productos, a través de sus derivados. Así mismo, ser garante de la implementación
y cumplimiento de la normatividad aplicada a cada una de los subprocesos, pues
somos fieles creyentes que en la medida en que se actúe de forma íntegra y legal,
podremos ofrecer el mejor producto a nuestros consumidores, ser el mejor lugar
para trabajar y aportar en el crecimiento económico tanto nacional como
regionalmente. 
                </p>
                <p class="subtitle">Visión</p>
                <p>Ser la empresa líder en innovación, desarrollo, producción y comercialización de
productos alimenticios basados en el jugo de caña de azúcar como lo es la panela
y sus derivados. Basados en una cultura de desarrollo continuo, para el
mejoramiento de los procesos. Con esto garantizamos que los mismos sean
acordes o superiores a las regulaciones medioambientales. Buscando que nuestros
campesinos y aliados tengan las mejores prácticas de manufactura. 
</p>
            </div>
            
        </div>
    </div>
</section>
<div class="parallax" style="background-image: url('{{ asset("/images/parallax/parallax_5.jpg") }}');"></div>

@endsection