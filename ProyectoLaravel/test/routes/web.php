<?php

Route::get('/', function (){
    return 'Home';
});

//Usuarios 

Route::get('/usuarios', 'UserController@index')
    ->name('users.index');

Route::get('/usuarios/nuevo', 'UserController@create')
    ->name('users.create');

Route::get('/usuarios/{id}', 'UserController@show')
    ->where('id','[0-9]+')
    ->name('users.show');

Route::post('/usuarios', 'UserController@store');

Route::get('/usuarios/{user}/editar', 'UserController@edit')->name('users.edit');

Route::put('/usuarios/{user}', 'UserController@update');

Route::get('/saludo/{name}/{nickname?}','WelcomeUserController');

Route::delete('/usuarios/{user}', 'UserController@destroy')->name('users.destroy');


//Botines

Route::get('/botines', 'BotinController@index')
    ->name('botines.index');

Route::get('/botines/nuevo', 'BotinController@create')
    ->name('botines.create');

Route::get('/botines/{id}', 'BotinController@show')
    ->name('botines.show');

Route::post('/botines', 'BotinController@store');

Route::get('/botines/{botin}/editar', 'BotinController@edit')->name('botines.edit');

Route::put('/botines/{botin}', 'BotinController@update');

Route::delete('/botines/{botin}', 'BotinController@destroy')->name('botines.destroy');


//Teclados

Route::get('/teclados', 'TecladoController@index')
    ->name('Teclados.index');

Route::get('/teclados/nuevo', 'TecladoController@create')
    ->name('Teclados.create');

Route::get('/teclados/{id}', 'TecladoController@show')
    ->name('Teclados.show');

Route::post('/teclados', 'TecladoController@store');

Route::get('/teclados/{Teclado}/editar', 'TecladoController@edit')->name('Teclados.edit');

Route::put('/teclados/{Teclado}', 'TecladoController@update');

Route::delete('/teclados/{Teclado}', 'TecladoController@destroy')->name('Teclados.destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
