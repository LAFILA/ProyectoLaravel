<?php

Route::get('/', function (){
    return 'Home';
});

//Usuarios 

Route::get('/usuarios', 'UserController@index')
    ->name('users.index');

Route::get('/usuarios/nuevo', 'UserController@create')
    ->name('users.create');

Route::get('/usuarios/{user}', 'UserController@show')
    ->where('user', '[0-9]+')
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
    ->name('botines.createb');

Route::get('/botines/{botin}', 'BotinController@show')
    ->where('botin', '[0-9]+')
    ->name('botines.showb');

Route::post('/botines', 'BotinController@store');

Route::get('/botines/{botin}/editar', 'BotinController@edit')->name('botines.editb');

Route::put('/botines/{botin}', 'BotinController@update');

Route::delete('/botines/{botin}', 'BotinController@destroy')->name('botines.destroy');


//Teclados

Route::get('/teclados', 'TecladoController@index')
    ->name('teclados.index');

Route::get('/teclados/nuevo', 'TecladoController@create')
    ->name('teclados.createt');

Route::get('/teclados/{teclado}', 'TecladoController@show')
    ->where('teclado', '[0-9]+')
    ->name('teclados.showt');

Route::post('/teclados', 'TecladoController@store');

Route::get('/teclados/{teclado}/editar', 'TecladoController@edit')->name('teclados.editt');

Route::put('/teclados/{teclado}', 'TecladoController@update');

Route::delete('/teclados/{teclado}', 'TecladoController@destroy')->name('teclados.destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
