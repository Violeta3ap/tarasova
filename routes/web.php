<?php
 
use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\KlientiController;
  use App\Http\Controllers\DataController;
   use App\Http\Controllers\numuriController;
  use App\Http\Controllers\rezervacijasController;
    use App\Http\Controllers\darbiniekiController;
 
Route::get('/', function () {
    return view('home');
});
 
Route::get('/contact', function () {
    return view('contact');
});
 
Route::get('/data', function () {
    return view('data');
});
 

//darbinieki Data
 
// Route::get('/data/allData', 'App\Http\Controllers\DataController@showAllData');
// //Maršruti darbinieku dzēšanai
// Route::get('/data/allData/{id}/delete', 'App\Http\Controllers\DataController@delete');
// Route::get('/data/allData/{id}/details', 'App\Http\Controllers\DataController@details');
// //jauns ziņojums
// //Rout::post('data/NewSumbit', function() {
//  //   return "Pievienot jaunu ireakstu";
//  //   return dd(Request::all());
// //});s
// Route::post('/data/NewSubmit', 'App\Http\Controllers\DataController@NewSubmit');

// Route::get('/data/allData/{id}/edit', 'App\Http\Controllers\DataController@edit');
// //maršrutu izmaiņu sagl
// Route::post('/data/allData/{id}/editSumbit', 'App\Http\Controllers\DataController@editSumbit');



//klienti
 

Route::get('/data/klienti', 'App\Http\Controllers\KlientiController@showAllData');
//Maršruti klienti dzēšanai
Route::get('/data/klienti/{id}/delete', 'App\Http\Controllers\KlientiController@delete');
Route::get('/data/klienti/{id}/details', 'App\Http\Controllers\KlientiController@details');

Route::post('/data/NewSubmit', 'App\Http\Controllers\KlientiController@NewSubmit');
Route::get('/data/klienti/{id}/klientiedit', 'App\Http\Controllers\KlientiController@edit');
//maršrutu izmaiņu sagl
Route::post('/data/klienti/{id}/editSumbit', 'App\Http\Controllers\KlientiController@editSumbit');





//numuri


Route::get('/data/numuri', 'App\Http\Controllers\numuriController@showAllData');
//Maršruti numuru dzēšanai
Route::get('/data/numuri/{id}/delete', 'App\Http\Controllers\numuriController@delete');
Route::get('/data/numuri/{id}/details', 'App\Http\Controllers\numuriController@details');

Route::post('/data/NewSubmit', 'App\Http\Controllers\numuriController@NewSubmit');
Route::get('/data/numuri/{id}/editnumuri', 'App\Http\Controllers\numuriController@edit');
//maršrutu izmaiņu sagl
Route::post('/data/numuri/{id}/editSumbit', 'App\Http\Controllers\numuriController@editSumbit');







//rezervacijas



Route::get('/data/rezervacijas', 'App\Http\Controllers\rezervacijasController@showAllData');
//Maršruti numuru dzēšanai
Route::get('/data/rezervacijas/{id}/delete', 'App\Http\Controllers\rezervacijasController@delete');
Route::get('/data/rezervacijas/{id}/details', 'App\Http\Controllers\rezervacijasController@details');

Route::post('/data/NewSubmit', 'App\Http\Controllers\rezervacijasController@NewSubmit');
Route::get('/data/rezervacijas/{id}/editrezervacijas', 'App\Http\Controllers\rezervacijasController@edit');
//maršrutu izmaiņu sagl
Route::post('/data/rezervacijas/{id}/editSumbit', 'App\Http\Controllers\rezervacijasController@editSumbit');



//darbinieki

Route::get('/data/darbinieki', 'App\Http\Controllers\darbiniekiController@showAllData');
//Maršruti darbinieki dzēšanai
Route::get('/data/darbinieki/{id}/delete', 'App\Http\Controllers\darbiniekiController@delete');
Route::get('/data/darbinieki/{id}/details', 'App\Http\Controllers\darbiniekiController@details');

Route::post('/data/NewSubmit', 'App\Http\Controllers\darbiniekiController@NewSubmit');
Route::get('/data/darbinieki/{id}/darbiniekiedit', 'App\Http\Controllers\darbiniekiController@edit');
//maršrutu izmaiņu sagl
Route::post('/data/darbinieki/{id}/editSumbit', 'App\Http\Controllers\darbiniekiController@editSumbit');





//maršruts datu lapai ar autorizāciju
Route::get('/data/allData', 'App\Http\Controllers\DataController@showAllData')->middleware('auth');


//maršruts login formai
Route::get('/login', function () {
    return view('login');
})->name('login');



//maršruts login formas apstrādei
Route::post('/loginp', 'App\Http\Controllers\LoginController@login');

// Parbaudei
// if (Auth::check()) {
//     // Lietotājs ir autentificēts
//     // return redirect()->intended('allData');
// } else {
//     // Lietotājs nav autentificēts
//     // return redirect('login');
// }

//reģistrācijai
Route::post('/register', 'App\Http\Controllers\LoginController@register');   

//izrakstīšanai
route::get('/logout', function () {
    Auth::logout();
    request()->session()->invalidate(); //sesijas neitralizēšana
    request()->session()->regenerateToken();  //regeneret CSRF tokenu
    return redirect('/');
})->name('logout');






