<?php

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

use App\Http\Controllers\UtamaController;

Route::get("/utama/test", [UtamaController::class, "test"]);

use App\Http\Controllers\KeduaController;

Route::get("/kedua/test", [KeduaController::class, "test"]);


Route::get('/', function () {
    return view('welcome');
});



Route::get("/about-me", function() {
    return "Nama Saya <b>ipnu adi</b>";
});

Route::get("/home", function() {
    return "selamat datang di <b>web kami</b>";
});

Route::get("/beranda", function() {
    return "Nama Saya <b>ini beranda saya</b>";
});

Route::get("/tentang", function() {
    return "<b>terimakasi telah berkunjung ke web kami</b>";
});

Route::get("/belajar", function() {
    return "silahkan pilih<b>pelajarang kesukaan mu</b>";
});





Route::get('/testing-view', function () {
    return view('view-1');
});

Route::get('/about-me', function () {
    return "Nama Saya <b>ipnu adi</b>";
});

//modul3
Route::get("/tema/bootstrap", [UtamaController::class, "index"]);
