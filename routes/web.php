<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Admin(Backend)
route::group(['prefix'=>'admin', 'middelware'=>'auth'], function (){
    Route::get('/', function () {
        return view('admin.index');
    });
    //Route Selanjutnya .....
});

//
Route::get('/', [FrontController::class, 'index']);
Route::get('about', [FrontController::class, 'about']);
Route::get('contact', [FrontController::class, 'contact']);


//Cek Tampilan Admin
// Route::get('tes/', function () {
//     return view('layouts.admin');

//Cek Tampilan front
// Route::get('tes/', function () {
//     return view('layouts.front');
// });
