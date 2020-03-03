
@extends('layouts.base')
@section('content')
 
    @if(is_array($pelicula))
        {{$pelicula[0]}}----{{$pelicula[1]}}
    @else
        La pelicula no existe
    @endif

@stop