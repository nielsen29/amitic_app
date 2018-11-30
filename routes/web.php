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

use App\Topicos;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth','role:admin')->group(function (){

    Route::resource('congresos', 'CongresoController');

});

Route::middleware('auth','role:participante')->group(function (){

    Route::get('/home',function (){

    });

});

Route::middleware('guest')->group(function (){

    Route::get('/',function () {
        return view('welcome');
    });

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*
Route::get('/{slug}',function (){
    return view('app');
})->where('slug','(?!api)([A-z\d-\/_.]+)?');
*/

//Route::view('/{path?}','app');

//Auth::routes();