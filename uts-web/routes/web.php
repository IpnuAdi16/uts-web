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
use App\Http\Controllers\BeritaController;

Route::get('/home', [UtamaController::class, "home"])->name("home");
Route::get("/saya", [UtamaController::class, "saya"])->name("nama1.1");
Route::get("/saya1", [UtamaController::class, "bro"])->name("nama1.2");
Route::get("/saya2", [UtamaController::class, "bro1"])->name("nama1.3");
Route::get("/saya3", [UtamaController::class, "bro2"])->name("nama1.4");
Route::get("/boting", [UtamaController::class, "bot"])->name("nama1.22");
Route::get("/apa-kabar", [UtamaController::class, "apakabar"])->name("nama");
Route::get("/hello/{nama?}", [UtamaController::class, "hello"])->name("mm1");
Route::get("/hello-bro/{nama}", [UtamaController::class, "haii"])->name("mm2");


Route::get("/berita", [BeritaController::class, "add"])->name("berita_tambah");
Route::post("/proses", [BeritaController::class, "pro"])->name("berita_proses");






Route::get('/', function () {
    return view('pages.home');
});