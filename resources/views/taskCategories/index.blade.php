@extends('layouts.app')

@section('content')
<H1>CATEGORIAS</H1>
@include('taskCategories.create')

@foreach ($task_categories as $task_category)
<a href="{{ route('taskCategory.edit',$task_category) }}">{{ $task_category->name }}</a>
@include('taskCategories.delete')

@endforeach

@endsection
