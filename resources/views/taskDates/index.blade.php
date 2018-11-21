@extends('layouts.app')

@section('content')
<H1>Fechas de inicio</H1>
@include('taskDates.create')

@foreach ($task_dates as $task_date)
<a href="{{ route('taskDate.edit',$task_date) }}">{{ $task_date->name }}</a>
@include('taskDates.delete')

@endforeach

@endsection
