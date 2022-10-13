<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
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
    return view('welcome',[
        
    ]
);
    
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home',
        'name' => 'Kerta Hendrawan',
    'NIM' => '2015051031',
    'email' => 'kerta@gmail.com'
    ]);
});

// Route::get('/table', function () {
//     return view('table',
// [
//     'title' => 'Tabel',
//     'name' => 'Kerta Hendrawan',
//     'NIM' => '2015051031',
//     'email' => 'kerta@gmail.com'
// ]);
// });


//route resource
// Route::resource('data', \App\Http\Controllers\BiodataController::class);
Route::resource('page.data', \App\Http\Controllers\BiodataController::class);
// Route::get('/table'[BiodataController::class, 'index'])->name('table');
Route::post('table',[BiodataController::class, 'store']);
Route::get('table',[BiodataController::class, 'create']);
Route::get('/token', function(){
    return csrf_token();
});