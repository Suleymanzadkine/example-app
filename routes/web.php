<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('pagina1', function(){
    return view(view: 'pagina1', data: ["name"=> "Suleyman"]);
});

Route::get('pagina2', function(){
    return view(view: 'pagina2');
});

Route::get('pagina3', function(){
    return view(view: 'pagina3');
});
