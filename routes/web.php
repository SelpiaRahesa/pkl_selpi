<?php

use App\Http\Middleware\IsAdmin;
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
// route::group(['prefix'=>'admin', 'middelware'=>'auth'], function (){
//     Route::get('/', function () {
//         return view('admin.index');
//     });
//     //Route Selanjutnya .....
// });

//
Route::get('/', [FrontController::class, 'index']);
Route::get('about', [FrontController::class, 'about']);
Route::get('contact', [FrontController::class, 'contact']);
Route::get('shop', [FrontController::class, 'shop']);
Route::get('pages', [FrontController::class, 'pages']);
Route::get('blogs', [FrontController::class, 'blogs']);
Route::get('blogs_detail', [FrontController::class, 'blogs_detail']);
Route::get('user', [FrontController::class, 'user']);
Route::get('privacy', [FrontController::class, 'privacy']);
Route::get('terms', [FrontController::class, 'terms']);
Route::get('faq', [FrontController::class, 'faq']);
Route::get('become', [FrontController::class, 'become']);
Route::get('cart', [FrontController::class, 'cart']);
Route::get('checkout', [FrontController::class, 'checkout']);
Route::get('whislist', [FrontController::class, 'whislist']);
Route::get('compaire', [FrontController::class, 'compaire']);
Route::get('order', [FrontController::class, 'order']);
Route::get('flash', [FrontController::class, 'flash']);


//Cek Tampilan Admin
// Route::get('tes/', function () {
//     return view('layouts.admin');

//Cek Tampilan front
// Route::get('tes/', function () {
//     return view('layouts.front');
// });

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    // untuk Route Backend Lainnya
    Route::resource('user', App\Http\Controllers\UsersController::class);
});

