<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ObjetoController;
use App\Mail\ConfirmacionCorreoMailable;

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
    return view('cliente/create');
});

Route::resource('/cliente',ClienteController::class);
Route::resource('/objeto',ObjetoController::class);

/*Route::get('/confirmacion', function(){

    Mail::to('aaa@codersfree.com') -> send(new ConfirmacionCorreoMailable);

    return "Mensaje enviado";

})->name('confirmacion');*/