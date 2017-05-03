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

Route::get('/', function () {
    return view('welcome');
});


//Route::get('about', function () {
//    return view('about', [
//        'name' => 'SEDC PHP',
//        'team' => [
//            'john doe',
//            'jane doe',
//            'john smith'
//        ]
//        ]);
//});

Route::get('about', 'PublicController@about');
Route::get('articles', 'ArticleController@index');
Route::get('articles/create', 'ArticleController@create');
Route::post('articles', 'ArticleController@store');//akcija vo form
Auth::routes();

Route::get('/home', 'HomeController@index');//dodadena sama so registracijata koga se registrira odi na blog.dev/home
