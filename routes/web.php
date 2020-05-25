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

Route::get('/', 'testing@home')->name('home');
Route::get('/addresult', 'testing@addresult')->name('addresult');
Route::get('/addcase', 'testing@addcase')->name('addcase');



Route::get('/about', 'testing@about')->name('about');
Route::get('/news','testing@news')->name('news');

Route::get('/addevidence', 'testing@addevidence')->name('addevidence');
Route::get('/addsuspect', 'testing@addsuspect')->name('addsuspect');
Route::get('/addofficer', 'testing@addofficer')->name('addofficer');
Route::get('/caseofficer', 'testing@caseofficer')->name('caseofficer');
// Route::get('/caseofficer/{caseId}', 'CaseofficerController@getCaseNameByCaseId')->name('getCaseNameByCaseId');

 

//forms
Route::resource('result','ResultController');
Route::resource('case','AddcaseController');
Route::resource('addcofficer','CaseofficerController');
Route::resource('officer','AddOfficerController');
Route::resource('a_evidence','AddevidenceController');
Route::resource('asus','AddSuspectController');
Route::resource('predict_res','PredictController');


//fetch
Route::get('/viewsuspect','AddSuspectController@index')->name('viewsuspect');
Route::get('/viewsuspect/{caseId}', 'AddSuspectController@getCasesByCaseId')->name('getCasesByCaseId');

Route::get('/v_evidences','AddevidenceController@index')->name('v_evidences');
Route::get('/v_evidences/{caseId}', 'AddevidenceController@getEvidencesByCaseId')->name('getEvidencesByCaseId');


Route::get('/predict', 'PredictController@index')->name('predict');
Route::get('/predict/{caseId}', 'PredictController@getPredictByCaseId')->name('getPredictByCaseId');

//Login
Route::get('/main','MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('/main/successlogin', 'MainController@successlogin');
Route::get('/main/logout', 'MainController@logout')->name('logout');



//joincontroller
Route::get('offhistory','JoinController@index')->name('offhistory');
Route::get('crimehistory','JoinController2@index')->name('crimehistory');




// //sendingEmail
// Route::get('/officer','SendEmailController@index');
// Route::post('/officer/send','SendEmailController@send');


// Route::get('/','FrontController@index');



Route::get('/contact','ContactFormController@create')->name('contact');



Route::post('/contact', [
	'uses' => 'ContactFormController@store',
	'as' => 'contact.store'
]);