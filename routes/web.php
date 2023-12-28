<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
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
    return view('index');
})->name('home')->middleware('auth');

Route::get('/viewpegawai', [PegawaiController::class, 'index'])->name('pegawai');
Route::post('/insertpegawai', [PegawaiController::class, 'insert']);
Route::post('/updatepegawai/{id}', [PegawaiController::class, 'update']);
Route::get('/deletepegawai/{id}', [PegawaiController::class, 'delete']);

Route::get('/viewjabatan', [JabatanController::class, 'index'])->name('jabatan');
Route::post('/insertjabatan', [JabatanController::class, 'insert']);
Route::post('/updatejabatan/{id}', [JabatanController::class, 'update']);
Route::get('/deletejabatan/{id}', [JabatanController::class, 'delete']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginproses', [AuthController::class, 'loginProses']);


Route::get('/register', [AuthController::class, 'register']);
Route::post('/registeruser', [AuthController::class, 'registerUser']);

Route::get('/logout', [AuthController::class, 'logout']);
