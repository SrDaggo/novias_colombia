@extends('layouts.app')

@section('content')

@if (auth()->user()->is_admin)
<a href="{{ route('taskCategory.index') }}">editar categorias</a>
@endif

<h1>TAREAS</h1>
@include('tasks.create')
<br>

<h3>Tareas pendientes</h3>
@foreach ($tasks_incompleted as $task)
<a href="{{ route('task.edit',$task->id) }}">{{ $task->title }}</a>
<br>
{{ $task->category->name }}
<br>
@include('tasks.delete')
@include('tasks.status')
@endforeach

<h3> Tareas completadas</h3>
@foreach ($tasks_completed as $task)

<a href="{{ route('task.edit',$task->id) }}">{{ $task->title }}</a>
<br>
{{ $task->category->name }}
<br>
@include('tasks.status')
@include('tasks.delete')

@endforeach
<br>
<br>


@endsection
