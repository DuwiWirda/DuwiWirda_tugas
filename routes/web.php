<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view();
});

Route::get('/about', function(){
    return view('about',[
        "judul" => "About",
        "nama" => "Duwi Wirda",
        "Nim" => "E41210558",
        "image" => "duwi.jpg"
    ]);
});
Route::get('/dashboard', function(){
    return view('dashboard',[
        "judul" => "Dashboard"
    ]);
});
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/home', [DashboardController::class, 'index']);

// Route::get('/home', function(){
//     return view('backend.dashboard');
// });





