<div class="container">
    <div class="columns">
        <div class="column ">
            <img src="{{ asset('/images/logo_nuevo.svg') }}" class="logo-brand image is-128x128" >
        </div>
        <div class="column is-hidden-mobile">
            <a href="tel:3212117662"></a>
            <img src="{{ asset('/images/iconos/wp.svg') }}" class="image is-48x48" style="margin:  auto; margin-top: 20px ">
            <p class="has-text-centered has-text-brown">3212117662</p>
        </div>
        <div class="column is-hidden-mobile">
            <a href="tel:3212117662"></a>
            <img src="{{ asset('/images/iconos/tl.svg') }}" class="image is-48x48" style="margin:  auto; margin-top: 20px ">
            <p class="has-text-centered has-text-brown">3212117662</p>
        </div>
        <div class="column is-hidden-mobile">
            <a href="tel:3212117662"></a>
            <img src="{{ asset('/images/iconos/fb.svg') }}" class="image is-48x48" style="margin:  auto; margin-top: 20px ">
            <p class="has-text-centered has-text-brown">3212117662</p>
        </div>
        <div class="column is-hidden-mobile">
            <a href="tel:3212117662"></a>
            <img src="{{ asset('/images/iconos/in.svg') }}" class="image is-48x48" style="margin:  auto; margin-top: 20px ">
            <p class="has-text-centered has-text-brown">3212117662</p>
        </div>
        <div class="column is-hidden-mobile">

            <img src="{{ asset('/images/iconos/slideheader0.jpg') }}" class="image" style="margin: 0 auto; margin-top: 5px">

        </div>
        <div class="column is-hidden-mobile">

            <img src="{{ asset('/images/iconos/cologo.png') }}" class="image" style="margin: 0 auto; width: 90%; margin-top: 5px">

        </div>
    </div>

</div>
<nav class="navbar is-warning" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
                <a @click="menu = !menu" role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>
            <div class="navbar-menu" :class="{'is-active': menu}">
                <div class="navbar-start">
                    <a href="/" class="navbar-item">Panela Bellavista</a>
                    <a href="/productos" class="navbar-item">Productos</a>
                    <a href="/encuentranos" class="navbar-item">Encuentranos</a>
                    {{--<a href="/recetas" class="navbar-item">Recetas</a>--}}
                    <a href="/aliados" class="navbar-item">Aliados</a>
                    <a href="/proceso" class="navbar-item">Proceso</a>
                    <a href="/nosotros" class="navbar-item">Nosotros</a>
                    <a href="/contactanos" class="navbar-item">Contactanos</a>
                </div>
            </div>
    </div>
</nav>