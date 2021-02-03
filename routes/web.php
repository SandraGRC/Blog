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

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('users/{id}/{valor?}', function ($id,$valor = null) {
    if($valor){
        return "usuário e o seu id é $id e o seu valor é $valor";
    }else{
        return "usuário e o seu id é $id";
    }
});

Route::get('users', function () {
    return "usuário";
});
