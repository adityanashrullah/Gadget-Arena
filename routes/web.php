<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GadgetController;
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
    return view('home');
});

Route::get('/produk', function () {
    return view('Produk');
});

Route::get('/page2', function () {
    return view('page2');
});

Route::get('/kalkulator', function () {
    return view('Kalkulator');
});

Route::get('/smartphone', function () {
    return view('Smartphone');
});

Route::get('/laptop', function () {
    return view('Laptop');
});

Route::get('/gadget', function () {
    return view('Gadget');
});

Route::get('/form', function () {
    return view('Form');
});

Route::get('/formoutput', function () {
    return view('FormOutput');
});


Route::get('/profile', function () {
    return view('Profile');
});

Route::get('/watchlist', function () {
    return view('Watchlist');
});

//ADMIN PAGE
Route::get('/admin', function () {
    return view('Table');
});

Route::get('/formadmin', function () {
    return view('FormAdmin');
});

Route::get('/edit', function () {
    return view('Edit');
});
//Route::get('/Gadget',[GadgetController::class,'index']);
Route::resource('gadget', GadgetController::class);
Route::get('/Table',[PegawaiController::class,'index']);
Route::post('login', [AuthController::class, 'getLogin']);