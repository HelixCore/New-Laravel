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
Route::get('/usuarios', function () {
    return 'usuarios';
});

Route::get('/usuarios/{id}', function ($id) {
    return 'Hola usuario '.$id;
})-> where ('id','\d+');

Route::get('/usuarios/Nuevo', function () {
    return 'welcome';
});

Route::get('/saludo/{name}/{nickname?}', function ($name,$nickname = null) {
    if($nickname){
        return "Bienvenido {$name}, {$nickname}";
    } else {
        return "Bienvenido {$name}";
    }
});

Route::get('/', function () {
    return view('welcome');
});
