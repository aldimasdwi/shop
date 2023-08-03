<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\WebController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('user.componen.depan');
});
Route::get('/produk', function () {
    return view('user.componen.produk');
});

Route::get('/login', function () {
    return view('admin.login');
});


Route::post('/data',[ProdukController::class,'tambah']);
Route::get('/dashboard',[WebController::class,'dashboard']);
