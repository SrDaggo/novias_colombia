@extends('layouts.app')

@section('title', 'Inicio')

@section('content')



    <div class="container section fondo">
        <div class="columns">
            <div class="column is-half is-6-desktop is-12-mobile">
                <figure class="image" style="width: 70%">
                    <img src="{{asset('images/makro.jpg')}}">
                </figure>
            </div>
            <div class="column is-6-desktop is-12-mobile">
                <figure class="image" style="width: 70%">
                    <img src="{{asset('images/colsubsidio.jpg')}}">
                </figure>
            </div>
        </div>
        <div class="columns">
            <div class="column is-6-desktop is-12-mobile">
                <figure class="image" style="width: 50%">
                    <img src="{{asset('images/16427778_1619175828094370_7844573631190044436_n.jpg')}}">
                </figure>
            </div>
        </div>
        <div class="columns">
            <div class="column is-6-desktop is-12-mobile">
                <figure class="image" style="width: 50%">
                    <img src="{{asset('images/slideheader0.jpg')}}">
                </figure>
            </div>
            <div class="column is-6-desktop is-12-mobile ">
                <figure class="image" style="width: 70%">
                    <img src="{{asset('images/colombia.jpg')}}">
                </figure>
            </div>
        </div>
    </div>


@endsection

@section('styles')
    <style>
        /*.image {*/
        /*margin: 0 auto;*/
        /*max-height: 200px;*/
        /*margin-bottom: 10px;*/
        /*}*/
    </style>
@endsection