@extends('layouts.app') @section('title', 'Contactanos') @section('content')
<section class="section fondo">
    <div class="container">
        <div class="columns content">
            <div class="column is-6">
                <ul class="has-text-brown is-size-5" style="list-style: none;">
                <li><span class="icon is-small"><img src="{{ asset('/images/iconos/wp.svg') }}"></span> 3212117662</li>
                <li><span class="icon is-small"><img src="{{ asset('/images/iconos/tl.svg') }}"></span> 3212117662</li>

                <li><span class="icon is-small"><img src="{{ asset('/images/iconos/ww.svg') }}"></span> www.panelabellavista.com</li>
                <li><span class="icon is-small"><img src="{{ asset('/images/iconos/fb.svg') }}"></span> @PanelaBellavista</li>
                <li><span class="icon is-small"><img src="{{ asset('/images/iconos/in.svg') }}"></span> @panelaBellavista</li>
                <li><span class="icon is-small"><img src="{{ asset('/images/iconos/ml.svg') }}"></span> contacto@</li>
                <li><span class="icon is-small"><img src="{{ asset('/images/iconos/mr.svg') }}"></span> 22 “ 33” 44”</li>
                </ul>
            </div>
            <div class="column is-6">
                <form method="POST" action="/mail">
                    <div class="field">
                        <div class="control">
                            <input placeholder="Nombres y apellidos" name="name" required="required" type="text" class="input">
                            
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input placeholder="Dirección de correo" name="email" required="required" type="email" class="input">
                        
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input placeholder="Telefono" name="phone" required="required" type="phone" class="input">
                        
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <textarea placeholder="Escribe tu mensaje" name="message" required="required" class="textarea"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="button is-outlined">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="parallax image" style="background-image: url('{{ asset("/images/parallax/parallax_3.jpg") }}');"></div>
@endsection
