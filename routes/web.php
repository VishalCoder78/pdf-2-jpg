<?php

use App\Http\Controllers\downloadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::get('/convert', function() {
    return view('convert');
} );

Route::post('/convert', [ImageController::class, "index"]);
Route::get('/image', [ImageController::class, "index"]);
Route::get('/download', [ImageController::class,"down"]);
// Route::get('/down', [ImageController::class, "index"]);
// Route::get('/storage/{filename}.png', [downloadController::class,"downl"]);
Route::get('/documemt', function () {
    return Storage::download('null.png');
});
