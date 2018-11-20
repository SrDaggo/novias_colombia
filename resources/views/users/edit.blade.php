@extends('layouts.app')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <h3 class="alert-heading">Corrige estos errores para continuar</h3>
    <ul>
        @foreach($errors->all() as $errors)
        <li>{{ $errors }}</li>
        @endforeach
    </ul>
</div>
@endif


<h3>Datos Personales</h3>
<form action="{{ url('/user/'.$user->id) }}" method="POST">
    {{ method_field('PUT') }}
    @csrf
    <label for="name">Nombre y Apellido</label>
    <input type="text" value="{{  old('name',$user->name) }}" name="name">
    <br>

    <label for="email">Email</label>
    <input type="text" value="{{ $user->email }}" name="email" readonly>
    <br>

    <label for="phone">Telefono</label>
    <input type="text" value="{{  old('phone',$user->phone) }}" name="phone">
    <br>
    <label for="about_me">Sobre mi</label>
    <textarea value="" name="about_me">{{ old('about_me',$user->about_me) }}</textarea>
    <br>

    <label for="gender">Yo soy</label>

    <input type="radio" id="male" value="male" name="gender">Novio
    <input type="radio" id="female" value="female" name="gender">Novia
    <input type="radio" id="other" value="other" name="gender">Otro
    <br>


    <h3>Mi Matrimonio</h3>

    <label for="wedding_municipio">Municipio de la boda</label>
    <input type="text">
    <br>

    <label for="partner_name">Mi Pareja</label>
    <input type="text" value="{{ old('partner_name',$user->partner_name) }}" name="partner_name">
    <br>

    <label for="partner_gender">Mi Pareja es</label>

    <input type="radio" id="partner_male" value="male" name="partner_gender">Novio
    <input type="radio" id="partner_female" value="female" name="partner_gender">Novia
    <input type="radio" id="partner_other" value="other" name="partner_gender">Otro
    <br>

    <label for="marrige_date">Día de mi boda</label>
    <input type="date" name="marrige_date" value="{{ old('marrige_date',$user->marrige_date) }}">
    <br>

    <label for="expected_guests">Numero de invitados</label>
    <input type="number" name="expected_guests" value="{{ old('expected_guests',$user->expected_guests) }}">
    <br>

    <label for="wedding_start">Hora de inicio</label>
    <br>
    <select name="wedding_hour_start" id="">
        <option value="" selected="">Hora</option>
        @for ($i = 0; $i < 24; $i++) <option value="{{ $i }}" @if($user->wedding_hour_start == $i) selected @endif>{{ $i }}</option>
            @endfor
    </select> <select name="wedding_minute_start" class="">
        <option value="" selected="">Min</option>
        @for ($i = 0; $i < 60; $i++) <option value="{{ $i }}" @if($user->wedding_minute_start == $i) selected @endif>{{ $i }}</option>
            @endfor
    </select>
    <br>

    <label for="wedding_finish">Hora de finalizacion</label>
    <br>
    <select name="wedding_hour_finish" id="">
        <option value="" selected="">Hora</option>
        @for ($i = 0; $i < 24; $i++) <option value="{{ $i }}" @if($user->wedding_hour_finish == $i) selected @endif>{{ $i }}</option>
            @endfor
    </select> <select name="wedding_minute_finish" class="">
        <option value="" selected="">Min</option>
        @for ($i = 0; $i < 60; $i++) <option value="{{ $i }}" @if($user->wedding_minute_finish == $i) selected @endif>{{ $i }}</option>
            @endfor
    </select>
    <br>

    {{-- FALTA PONER ESTOS SELECTORES A QUE SE AUTOSELECCIONEN SEGÚN LA BASE DE DATOS --}}
    <label for="wedding_color">Color</label>
    <select name="wedding_color" id="">
        <option value=""></option>
        <option value="white">Blanco</option>
        <option value="blue">Azul</option>
        <option value="yellow">Amarillo</option>
    </select>
    <label for="wedding_style">Estilo</label>
    <select name="wedding_style" id="">
        <option value=""></option>
        <option value="beach">En la playa</option>
        <option value="night">De noche</option>
        <option value="modern">Moderno</option>
        <option value="elegant">Elegante</option>
    </select>

    <label for="wedding_weather">Clima</label>
    <select name="wedding_weather" id="">
        <option value=""></option>
        <option value="winter">Invierno</option>
        <option value="summer">Verano</option>
        <option value="spring">Primavera</option>
        <option value="autumn">Otoño</option>
    </select>
    <br>
    <br>

    <button type="submit">Guardar cambios</button>

    @endsection
</form>

@section('aditional_scripts')
<script>
    function preselect_gender_radio() {

        var gender = '<?php echo $user->gender; ?>';
        var radio = document.getElementsByName('gender');
        for (i = 0; i < radio.length; i++) {

            if (radio[i].value == gender) {
                radio[i].checked = true;
            }
        }
    }
    window.addEventListener('load', preselect_gender_radio);

</script>

<script>
    function preselect_partner_radio() {

        var partner_gender = '<?php echo $user->partner_gender; ?>';
        var radio = document.getElementsByName('partner_gender');
        for (i = 0; i < radio.length; i++) {

            if (radio[i].value == partner_gender) {
                radio[i].checked = true;
            }
        }
    }
    window.addEventListener('load', preselect_partner_radio);

</script>

@endsection
