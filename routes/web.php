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
//Las volvimos a cambiar
Route::get('/usuarios/{id}', function ($id) {
    return "Mostrando detalle del usuario: {$id}";
})->where('id', '[0-9]+');

Route::get('/usuarios/nuevo', function () {
    return 'Crear nuevo usuario';
});
/*
 * esto es si el usuario quiere un apodo
Route::get('/saludo/{name}/{nickname}', function ($name, $nickname) {
    return "Bienvenido {$name}, tu apodo es {$nickname}";
});
*/

Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    
    $name = ucfirst($name);
    
    if ($nickname) {
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    } else {
        return "Bienvenido {$name}";
    }
});