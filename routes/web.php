<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/miPrimeraRuta', function () {
    return "Creé mi primer ruta en Laravel";
});

Route::get('/esPar/{numero}', function($numero){
    if($numero%2==0)
        return "Es par";
    else
    return "Es impar";
});

Route::get('/sumar/{numeroA}/{numeroB}/{numeroC?}', function($numeroA,$numeroB,$numeroC = null){
    if($numeroC != null)
        return $numeroA+$numeroB+$numeroC;
    else
        return $numeroA+$numeroB;   
});


Route::get('/peliculas/{id?}', function ($id=null) {
    $peliculas = [["Banana", 8],['Pera',2 ],['Uva', 9],['Rodrigo', 10],['Digital',0]];
    if($id == null)
        return view("peliculas",compact('peliculas'));
    if($id>=0 and $id<= count($peliculas))
        $pelicula = $peliculas[$id];
    else
        $pelicula = 6; #Numero random
    return view("detallePelicula",compact('pelicula'));
});
