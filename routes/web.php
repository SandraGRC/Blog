<?php

use Illuminate\Support\Facades\Route;


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
