@extends('layouts.base')
@section('content')
 
<h3>Peliculas</h3>
<ul>
    @if(sizeof($peliculas)!=0)
        <li>Peliculas-Rating</li>
        @foreach ($peliculas as $pelicula)
            <li>{{$pelicula[0]}}-----{{$pelicula[1]}}
            @if($pelicula[1] >= 8)
                Recomendada
            @endif
            </li>    

        @endforeach
    @else
        No hay películas
    @endif
    
</ul>

@stop