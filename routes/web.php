<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;
use App\Models\Berita;
use App\Models\Kategori;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/dashboard/berita', [AdminController::class,'indexBerita'])->name('admin.berita.dashboard')->middleware('auth');
Route::get('/dashboard/berita/form-tambah', [BeritaController::class, 'formTambah'])->name('admin.berita.formTambah')->middleware('auth');
Route::post('/dashboard/berita/tambah', [BeritaController::class, 'tambah'])->name('admin.berita.tambah')->middleware('auth');
Route::get('/dashboard/berita/formubah/{id}', [BeritaController::class, 'formUbah'])->name('admin.berita.formUbah')->middleware('auth');
Route::post('/dashboard/berita/ubah/{id}', [BeritaController::class, 'ubah'])->name('admin.berita.ubah')->middleware('auth');
Route::get('/dashboard/berita/detail/{id}', [BeritaController::class, 'detail'])->name('admin.berita.detail')->middleware('auth');
Route::get('/dashboard/berita/hapus/{id}', [BeritaController::class, 'hapus'])->name('admin.berita.hapus')->middleware('auth');

// kategori
Route::get('/dashboard/kategori', [AdminController::class, 'indexKategori'])->name('admin.kategori.dashboard')->middleware('auth');
Route::get('/dashboard/kategori/formtambah', [KategoriController::class, 'formTambah'])->name('admin.kategori.formTambah')->middleware('auth');
Route::get('/dashboard/kategori/formubah/{id}', [KategoriController::class, 'formUbah'])->name('admin.kategori.formUbah')->middleware('auth');
Route::post('/dashboard/kategori/tambah', [KategoriController::class, 'tambah'])->name('admin.kategori.tambah')->middleware('auth');
Route::post('/dashboard/kategori/ubah/{id}', [KategoriController::class, 'ubah'])->name('admin.kategori.ubah')->middleware('auth');
Route::get('/dashboard/kategori/detail/{id}', [KategoriController::class, 'detail'])->name('admin.kategori.detail')->middleware('auth');
Route::get('/dashboard/kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('admin.kategori.hapus')->middleware('auth');
