<?php
 
use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\KlientiController;
  use App\Http\Controllers\DataController;
 
Route::get('/', function () {
    return view('home');
});
 
Route::get('/contact', function () {
    return view('contact');
});
 
Route::get('/data', function () {
    return view('data');
});
 

//darbinieki
 
 
Route::get('/data/allData', 'App\Http\Controllers\DataController@showAllData');
//Maršruti darbinieku dzēšanai
Route::get('/data/allData/{id}/delete', 'App\Http\Controllers\DataController@delete');
Route::get('/data/allData/{id}/details', 'App\Http\Controllers\DataController@details');
//jauns ziņojums
//Rout::post('data/NewSumbit', function() {
 //   return "Pievienot jaunu ireakstu";
 //   return dd(Request::all());
//});s
Route::post('/data/NewSubmit', 'App\Http\Controllers\DataController@NewSubmit');
Route::post('/data/allData/{id}/editt', 'App\Http\Controllers\DataController@editSumbit');
Route::get('/data/allData/{id}/edit', 'App\Http\Controllers\DataController@edit');
//maršrutu izmaiņu sagl
Route::post('/data/allData/{id}/editSumbit', 'App\Http\Controllers\DataController@editSumbit');



//klienti
 

Route::get('/data/klienti', 'App\Http\Controllers\KlientiController@showAllData');
//Maršruti klienti dzēšanai
Route::get('/data/klienti/{id}/delete', 'App\Http\Controllers\KlientiController@delete');
Route::get('/data/klienti/{id}/details', 'App\Http\Controllers\KlientiController@details');

Route::post('/data/NewSubmit', 'App\Http\Controllers\KlientiController@NewSubmit');
Route::get('/data/klienti/{id}/editklienti', 'App\Http\Controllers\KlientiController@edit');
//maršrutu izmaiņu sagl
Route::post('/data/klienti/{id}/editSumbit', 'App\Http\Controllers\KlientiController@editSumbit');





//numuri


Route::get('/data/numuri', 'App\Http\Controllers\numuriController@showAllData');
//Maršruti numuru dzēšanai
Route::get('/data/numuri/{id}/delete', 'App\Http\Controllers\numuriController@delete');
Route::get('/data/numuri/{id}/details', 'App\Http\Controllers\numuriController@details');

Route::post('/data/NewSubmit', 'App\Http\Controllers\numuriController@NewSubmit');
Route::get('/data/numuri/{id}/edit', 'App\Http\Controllers\numuriController@edit');
//maršrutu izmaiņu sagl
Route::post('/data/numuri/{id}/editSumbit', 'App\Http\Controllers\numuriController@editSumbit');







//rezervacijas



Route::get('/data/rezervacijas', 'App\Http\Controllers\rezervacijasController@showAllData');
//Maršruti numuru dzēšanai
Route::get('/data/rezervacijas/{id}/delete', 'App\Http\Controllers\rezervacijasController@delete');
Route::get('/data/rezervacijas/{id}/details', 'App\Http\Controllers\rezervacijasController@details');

Route::post('/data/NewSubmit', 'App\Http\Controllers\rezervacijasController@NewSubmit');
Route::get('/data/rezervacijas/{id}/edit', 'App\Http\Controllers\rezervacijasController@edit');
//maršrutu izmaiņu sagl
Route::post('/data/rezervacijas/{id}/editSumbit', 'App\Http\Controllers\rezervacijasController@editSumbit');
