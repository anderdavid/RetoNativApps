<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('hello', 'TestController@hello');


//php artisan make:controller TestController --resource

/***
*COMANDOS LARAVEL CONSOLA
**
//intalar composer
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
//crear proyecto  con composer
composer create-project --prefer-dist laravel/laravel NOMBRE_PROYECTO

//correr proyecto
iptables -I INPUT -p tcp --destination-port tcp --destination-port 8000 -j ACCEPT
php artisan serve --host=0.0.0.0  --port=8000

//artisan
php artisan make:controller NOMBRE_CONTROLADOR --invokable
php artisan make:controller NOMBRE_CONTROLADOR --resource

php artisan make:model NOMBRE_MODELO
php artisan make:model NOMBRE_MODELO -m

php artisan make:seeder NOMBRE_TABLATableSeeder
php artisan db:seed --class=NOMBRE_TABLATableSeeder

php artisan migrate
php artisan migrate:rollback
php artisan migrate:refresh
php artisan migrate:refresh --seed
//migracion para relacion entre dos tablas
php artisan make:migration create_role_user_table

//crear modulo autenticacion
php artisan make:auth

*/	