@extends('layouts.app')

@section('content')
<h1>TAREAS</h1>
@include('tasks.create')
<br>

@foreach ($tasks as $task)
<a href="{{ route('task.edit',$task->id) }}">{{ $task->title }}</a>

<br>
{{ $task->category->name }}
<br>
@include('tasks.delete')

@endforeach
<br>
<br>


@endsection
