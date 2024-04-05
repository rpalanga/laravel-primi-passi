<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    // return view('primaPagina');
    $saluto = 'Presentiamoci allora';
    $saluto2 ='Mi sembra di averti già visto da qualche parte';
    $luoghi=["Palestra","Cinema","Bar"];

    return view('primaPagina', compact('saluto','saluto2','luoghi'));
})->name('prima');

Route::get('/secondaPagina', function () {

    // return view('secondaPagina');
    $saluto3='Come ti chiami?';
    $nomi=['Giovanni','Luca','Giorgio','Gino'];
    $saluto4='Aspetta ma tu sei il cugino di francesco?';
    $parenti=['Mario','Ninni','Sara','Mario'];


    return view('secondaPagina', compact('saluto3','saluto4','nomi','parenti'));

})->name('seconda');

Route::get('/terzaPagina', function () {

    $saluto5='Come sta zia rosa?';
    $zii=['Ignaizia','Michela','Concetta','Acotomena'];
    $saluto6='Salutami tutti ora che torni a casa.';
    

    return view('terzaPagina', compact('saluto5','saluto6','zii'));

})->name('terza');
