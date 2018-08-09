<?php

Route::get('/', function (){
    return 'Home';
});

Route::get('/usuarios', function () {
    return 'Usuarios';
});

//Por ende
//usuarios/nuevo != usuarios/[0-9]+
//OJO [0-9]+ == \d+ OJO
//OJO la expresión regular \w+ acepta letras y números

//La otra solución es cambiar el orden
/*
Route::get('/usuarios/{id}', function ($id) {
    return "mostrando detalle del usuario: {$id}";
})->where('id', '\d+');

Route::get('/usuarios/nuevo', function () {
    return 'Crear nuevo usuario';
});
 */

//aquí hicimos el cambio del órden de las rutas
Route::get('/usuarios/nuevo', function () {
    return 'Crear nuevo usuario';
});

Route::get('/usuarios/{id}', function ($id) {
    return "mostrando detalle del usuario: {$id}";
});
