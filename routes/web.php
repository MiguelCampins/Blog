<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\correo;
use Illuminate\Support\Facades\Auth;

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


Route::get("/","ComentariosController@index");
Route::get("/inicio","ComentariosController@index");

Route::get("/crear","ComentariosController@create");
Route::post("/crear","ComentariosController@store");

Route::get("/biografia","ComentariosController@biografia");

Route::get("/contacto","ComentariosController@contacto");
Route::post("/contacto","ComentariosController@store2");

Route::post("/reserva","ComentariosController@store3");

Route::get("/libros","ComentariosController@libros");



Route::get("/libro1",function(){
    return view('libros/libro1');
});    
Route::get("/libro2",function(){
    return view('libros/libro2');
}); 
Route::get("/libro3",function(){
    return view('libros/libro3');
}); 
Route::get("/libro4",function(){
    return view('libros/libro4');
}); 
Route::get("/libro5",function(){
    return view('libros/libro5');
}); 
Route::get("/libro6",function(){
    return view('libros/libro6');
});   

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
