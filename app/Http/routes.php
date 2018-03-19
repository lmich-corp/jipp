<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/home', 'HomeController@index');

// superadmin
Route::get('/superadmin', 'SuperadminController@index');

Route::get('/ebookadmin', 'SuperadminController@ebook');
Route::get('/createebookadmin', 'SuperadminController@createebook');
Route::post('/storeebook', 'SuperadminController@storeebook');

Route::get('/agendaadmin', 'SuperadminController@agenda');
Route::get('/createwartaadmin', 'SuperadminController@createwarta');
Route::post('/stroreagenda', 'SuperadminController@stroreagenda');

Route::get('/wartaadmin', 'SuperadminController@warta');
Route::get('/createagendaadmin', 'SuperadminController@createagenda');
Route::post('/storewarta', 'SuperadminController@storewarta');

Route::get('/regulasiadmin', 'SuperadminController@regulasi');
Route::get('/createregulasiadmin', 'SuperadminController@createregulasi');
Route::post('/storeregulasi', 'SuperadminController@storeregulasi');

Route::get('/materiadmin', 'SuperadminController@materi');
Route::get('/createmateriadmin', 'SuperadminController@createmateri');
Route::post('/storemateri', 'SuperadminController@storemateri');

Route::get('/user', 'SuperadminController@user');
Route::get('/createuser', 'SuperadminController@createuser');
Route::post('/storeuser', 'SuperadminController@storeuser');

Route::get('/kontakkami', 'SuperadminController@kontakkami');
Route::get('/createkontakkami', 'SuperadminController@createkontakkami');
Route::post('/storekontakkami', 'SuperadminController@storkontakkami');

Route::get('/inovasi', 'SuperadminController@inovasi');
Route::get('/createinovasi', 'SuperadminController@createinovasi');
Route::post('/storeinovasi', 'SuperadminController@storeinovasi');

Route::get('/ideinovasi', 'SuperadminController@ideinovasi');
Route::get('/createideinovasi', 'SuperadminController@createideinovasi');
Route::post('/storeideinovasi', 'SuperadminController@storeideinovasi');

Route::get('/gantipassword', 'SuperadminController@gantipassword');

// admin
Route::get('/admins', 'AdminController@index');
Route::get('/profiladmin', 'AdminController@profiladmin');

Route::get('/admininovator', 'AdminController@admininovator');
Route::get('/createinovator', 'AdminController@createinovator');
Route::post('/stroreinovator', 'AdminController@stroreinovator');
Route::get('/editinovator/{id}','AdminController@editinovator' );
Route::patch('/updateinovator{id}', 'AdminController@updateinovator');

Route::get('/adminproposal', 'AdminController@adminproposal');
Route::get('/lihatproposal', 'AdminController@lihatproposal');
Route::get('/editproposal/{id}', 'AdminController@editproposal');
Route::get('/updateproposal/{id}', 'AdminController@updateproposal');

Route::get('/passwordadmin', 'AdminController@passwordadmin');


Route::auth();



Route::resource('proposal', 'ProposalController');


