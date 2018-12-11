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
use App\Congreso;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth','role:admin')->group(function (){
    Route::resource('congresos', 'CongresoController');
    Route::get('/getForm', function (){
       $d = new Congreso();
       return $d->getCampos();
    });

});

Route::middleware('auth','role:participante')->group(function (){

    Route::get('/home',function (){

    });


});

/*Route::middleware('guest')->group(function (){

    Route::get('/',function () {
        return view('Congreso');
    });

   Route::get('/{year}','CongresoNowController@index');

   Auth::routes();






});*/

Route::post('/lol','CongresoNowController@lol');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*
Route::get('/{slug}',function (){
    return view('app');
})->where('slug','(?!api)([A-z\d-\/_.]+)?');
*/

//Route::view('/{path?}','app');

//Auth::routes();


Route::get('/test', function (){
   $d = new Congreso();

   dd($d->getCampos());
});