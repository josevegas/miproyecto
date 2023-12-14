@extends('layouts.landing')

@section('title','Home')

@section('content')
    <h1>Home</h1>
    @component('landing._components.card')
        @slot('name','receta 1')
        @slot('diets','dieta 1')
    @endcomponent
@endsection