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
Route::resource('receipe','ReceipeController');
//Route::get('/','ReceipeController@index');
//Route::get('receipe','ReceipeController@index');
//Route::get('receipe/create','ReceipeController@createReceipeForm');
//Route::get('receipe/{id}','ReceipeController@show');
//Route::post('receipe','ReceipeController@create');
//Route::get('receipe/{id}/edit','ReceipeController@edit');
//Route::patch('receipe/{id}','ReceipeController@update');
//Route::delete('receipe/{id}','ReceipeController@delete');
/*
Route::get('/','HomeController@index');
Route::get('php','HomeController@phpPage');
Route::get('js','HomeController@jsPage');


//Route::get('/', function () {
//    return view('home', ['name'=>"Home Page Template"]
//);
//});
Route::get('/php', function () {
    return view('php',[
    	'data' => array(
    		"lesson1"=>"this is php lesson1",
    		"lesson2"=>"this is php lesson2",
    		"lesson3"=>"this is php lesson3",
    	)
    ]
);
});
Route::get('/js', function () {
    return view('js',[
    	'data'=>array(
    		"lesson1"=>"this is js lesson1",
    		"lesson2"=>"this is js lesson2",
    		"lesson3"=>"this is js lesson3",
    	)
    ]);
});
*/