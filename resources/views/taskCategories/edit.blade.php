@extends('layouts.app')

@section('content')
<H1>EDITAR</H1>
<form action="{{ route('taskCategory.update',$task_category->id) }}" method="POST">

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
    <input type="text" name="name" id="" value="{{ old('name',$task_category->name) }}">
    <button type="submit">Guardar</button>
</form>
@endsection
