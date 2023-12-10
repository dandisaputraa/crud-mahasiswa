<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\berhitung;
use App\Http\Controllers\dandi202225;
// use App\Http\Controllers\view_mhs;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/berhitung', function () {
    return view('berhitung');
});


Route::get('/hitung', [App\Http\Controllers\HitungController::class, 'tambah']);
Route::get('/respon', [App\Http\Controllers\DandiController::class, 'nim202225']);
Route::get('/respon202225', [App\Http\Controllers\Dosen202225Controller::class, 'view_202225_dosen']);

//jurusan
Route::get('/tugas4', [App\Http\Controllers\JurusanController::class, 'tampil_jurusan']);
Route::get('/jurusan/create',[App\Http\Controllers\JurusanController::class,'create']);
Route::post('/jurusan/create',[App\Http\Controllers\JurusanController::class,'proses']);
Route::get('/jurusan/{id_jurusan}/delete',[App\Http\Controllers\JurusanController::class,'delete']);
Route::get('/jurusan/{id_jurusan}/edit',[App\Http\Controllers\JurusanController::class,'edit']);

//tugas3
Route::get('/tugas3', [App\Http\Controllers\MahasiswaController::class, 'tampil_semua']);
Route::get('/mahasiswa/create',[App\Http\Controllers\MahasiswaController::class,'create']);
Route::post('/mahasiswa/create',[App\Http\Controllers\MahasiswaController::class,'proses']);
Route::get('/mahasiswa/{nim}/edit',[App\Http\Controllers\MahasiswaController::class,'edit']);
Route::get('/mahasiswa/{nim}/edit',[MahasiswaController::class,'edit']);
Route::get('/mahasiswa/{nim}/delete',[MahasiswaController::class,'delete']);
// Route::post('/mahasiswa/create',[MahasiswaController::class,'tambah']);
Route::put('/mahasiswa/edit',[MahasiswaController::class,'ubah']);
