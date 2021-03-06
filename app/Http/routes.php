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



Route::get('/', 'HomeController@index');
Route::get('/profil', 'HomeController@profil');
Route::get('/etalase', 'HomeController@etalase');
Route::get('/ideinovasi', 'HomeController@ideinovasi');
Route::get('/warta', 'HomeController@warta');
Route::get('/regulasi', 'HomeController@regulasi');
Route::get('/agendakab', 'HomeController@agendakab');
Route::get('/agendaprov', 'HomeController@agendaprov');
Route::get('/agendanas', 'HomeController@agendanas');
Route::get('/referensi', 'HomeController@referensi');

	Route::get('/user', 'SuperadminController@user');
	Route::get('/createuser', 'SuperadminController@createuser');
	Route::post('/storeuser', 'SuperadminController@storeuser');

	//inovator
	// Route::get('/inovator', 'InovatorController@index');
	
	Route::get('/inovatorprofil', 'InovatorController@profil');
	Route::patch('/updateprofil/{inovator}', 'InovatorController@profilupdate');
	
	Route::get('/inovatorproposal', 'InovatorController@proposal');
	Route::post('/proposalupdate/{id}', 'InovatorController@proposalupdate');

	Route::get('/inovatorpenghargaan', 'InovatorController@penghargaan');
	Route::patch('/penghargaanupdate/{penghargaan}', 'InovatorController@penghargaanupdate');

	Route::get('/inovatorpenerapan', 'InovatorController@penerapan');
	Route::patch('/penerapanupdate/{penerapan}', 'InovatorController@penerapanupdate');

	Route::get('/passwordinovator', 'InovatorController@gantipassword');
	Route::post('/storepasswordinv', 'InovatorController@storepassword');
	

Route::group([
  'middleware'=>['auth']] ,function(){

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
	Route::patch('/updateadmin/{admin}', 'AdminController@profilupdate');

	Route::get('/admininovator', 'AdminController@admininovator');
	Route::get('/createdinaskab', 'AdminController@createdinaskab');
	Route::post('/storedinaskab', 'AdminController@storedinaskab');

	Route::get('/editinovator/{id}','AdminController@editinovator' );
	Route::patch('/updateinovator{id}', 'AdminController@updateinovator');

	Route::get('/adminproposal', 'AdminController@adminproposal');
	Route::get('/lihatproposal', 'AdminController@lihatproposal');
	Route::get('/editproposal/{id}', 'AdminController@editproposal');
	Route::patch('/updateproposal/{id}', 'AdminController@updateproposal');

	Route::get('/passwordadmin', 'AdminController@passwordadmin');

	//dinasprov
	Route::get('/dinasprov', 'DinasprovController@index');
	Route::get('/profildinasprov', 'DinasprovController@profildinasprov');
	Route::patch('/updatedinasprov/{dinasprov}', 'DinasprovController@profilupdate');

	Route::get('/dinasprovinovator', 'DinasprovController@dinasprovinovator_prov');
	Route::get('/createinovator_prov', 'DinasprovController@createinovator_prov');
	Route::post('/storeinovator_prov', 'DinasprovController@storeinovator_prov');

	Route::get('/editinovator_prov/{id}','DinasprovController@editinovator_prov' );
	Route::patch('/updateinovator_pro_prov{id}', 'DinasprovController@updateinovator_pro_prov');

	Route::get('/dinasprovproposal', 'DinasprovController@dinasprovproposal');
	Route::get('/lihatproposal', 'DinasprovController@lihatproposal');
	Route::get('/editproposal/{id}', 'DinasprovController@editproposal');
	Route::patch('/updateproposal/{id}', 'DinasprovController@updateproposal');
	Route::get('/dinasprov/cekpenerapan/{id}', 'DinasprovController@detailpenerapan');
	Route::get('/dinasprov/cekpenghargaan/{id}', 'DinasprovController@detailpenghargaan');
	Route::get('/dinasprov/cekproposal/{id}', 'DinasprovController@detailproposal');

	Route::get('/passwordadmin', 'DinasprovController@passwordadmin');


	//dinaskab
	Route::get('/dinaskab', 'DinaskabController@index');
	Route::get('/profildinaskab', 'DinaskabController@profildinaskab');
	Route::patch('/updatedinaskab/{id}', 'DinaskabController@profilupdate');

	Route::get('/dinaskabinovator', 'DinaskabController@dinaskabinovator');
	Route::get('/createinovator', 'DinaskabController@createinovator');
	Route::post('/storeinovator', 'DinaskabController@storeinovator');

	Route::get('/editinovator/{id}','DinaskabController@editinovator' );
	Route::patch('/updateinovator{id}', 'DinaskabController@updateinovator');

	Route::get('/dinaskabproposal', 'DinaskabController@dinaskabproposal');
	Route::get('/lihatproposal', 'DinaskabController@lihatproposal');
	Route::get('/editproposal/{id}', 'DinaskabController@editproposal');
	Route::patch('/updateproposal/{id}', 'DinaskabController@updateproposal');
	Route::get('/dinaskab/cekpenerapan/{id}', 'DinaskabController@detailpenerapan');
	Route::get('/dinaskab/cekpenghargaan/{id}', 'DinaskabController@detailpenghargaan');
	Route::get('/dinaskab/cekproposal/{id}', 'DinaskabController@detailproposal');

	Route::get('/passwordadmin', 'DinaskabController@passwordadmin');
	
	
	
});

Route::auth();



Route::resource('proposal', 'ProposalController');
Route::resource('inovator', 'InovatorController');


