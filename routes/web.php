<?php

use Illuminate\Support\Facades\Route;
use App\Models\posts;
use App\Http\Controllers\PostController;

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

Route::get('/newposttest', function(){

    $x = new Post();
    $x->title = "Mijn titel";
    $x->body = "Dit is de inhoud";
    $x->save();

    return "done";
});

Route::resource('posts', PostController::class);