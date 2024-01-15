<?php
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('pengaduan', PengaduanController::class)->middleware('auth');
Route::resource('tanggapan', TanggapanController::class)->middleware('auth');

//Route::get('/pengguna/pengaduan', PengaduanController::class, '')->middleware('auth');
Route::get('/laporan', [PengaduanController::class, 'laporan'])->middleware('auth');

Route::get('/laporan/cetak', [PengaduanController::class, 'pdf'])->middleware('auth');
