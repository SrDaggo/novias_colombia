@extends('layouts.app')

@section('content')
<form action="{{ route('task.update',$task->id) }}" method="POST">
    @csrf
    @method('PUT')
    @if($errors->any())

    <h3 class="">Corrige estos errores para continuar</h3>
    <ul>
        @foreach($errors->all() as $errors)
        <li>{{ $errors }}</li>
        @endforeach
    </ul>
    @endif

    <label for="title">Título</label>
    <input type="text" name="title" maxlength="120" value="{{  old('title',$task->title) }}" required>
    <br>

    <label for="description">Descripción</label>
    <br>
    <textarea name="description">{{  old('description',$task->description) }}</textarea>
    <br>

    <select name="category_id" id="select-task-category" required>
        <option value="">Categoria</option>
        @foreach ($task_categories as $task_category)
        <option value="{{ $task_category->id }}">{{ $task_category->name }}</option>
        @endforeach
    </select>
    <br>

    <select name="date_id" id="select-task-date" required>
        <option value="">Fecha de Inicio</option>
        @foreach ($task_dates as $task_date)
        <option value="{{ $task_date->id }}">{{ $task_date->name }}</option>
        @endforeach
    </select>
    <br>


    <label for="note">Nota</label>
    <textarea name="" id="" cols="10" rows="1"></textarea>
    <br>

    <button type="submit">Guardar</button>

</form>


@endsection

@section('aditional_scripts')

<script>
    function preselected_items() {
        var category = '<?php echo $task->category_id; ?>';
        var select_task_category = document.getElementById('select-task-category');
        var date = '<?php echo $task->date_id; ?>';
        var select_task_date = document.getElementById('select-task-date');

        select_task_category.value = category;
        select_task_date.value = date;

    }
    window.addEventListener('load', preselected_items)

</script>
@endsection
