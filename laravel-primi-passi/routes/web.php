<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Ripete i passaggi visti a lezione per l'uso di Laravel.
//Create un semplice esercizio a piacere utilizzando le rotte e le views.
Route::get('/', function () {
    return view('home');
});

Route::get('/ottienisoftware', function () {
    return view('download');
});
