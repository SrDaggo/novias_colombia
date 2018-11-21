@extends('layouts.app')

@section('content')
<H1>EDITAR</H1>
<form action="{{ route('taskDate.update',$task_date->id) }}" method="POST">

    @if($errors->any())
    <h3 class="">Corrige estos errores para continuar</h3>
    <ul>
        @foreach($errors->all() as $errors)
        <li>{{ $errors }}</li>
        @endforeach
    </ul>
    @endif

    @csrf
    @method('PUT')
    <label for="name">Nombre</label>
    <input type="text" name="name" id="" value="{{ old('name',$task_date->name) }}">
    <button type="submit">Guardar</button>
</form>
@endsection
