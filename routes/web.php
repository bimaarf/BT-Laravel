<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TrendingController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\YoutubeController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminKategoriController;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Trending;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// berita
Route::get('/dashboard', [SiteController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/berita', [AdminController::class,'indexBerita'])->name('admin.berita.dashboard')->middleware('auth');
Route::get('/dashboard/berita/form-tambah', [AdminBeritaController::class, 'formTambah'])->name('admin.berita.formTambah')->middleware('auth');
Route::post('/dashboard/berita/tambah', [AdminBeritaController::class, 'tambah'])->name('admin.berita.tambah')->middleware('auth');
Route::get('/dashboard/berita/formubah/{id}{key}', [AdminBeritaController::class, 'formUbah'])->name('admin.berita.formUbah')->middleware('auth');
Route::post('/dashboard/berita/ubah/{id}', [AdminBeritaController::class, 'ubah'])->name('admin.berita.ubah')->middleware('auth');
Route::get('/dashboard/berita/view/{id}{key}', [AdminBeritaController::class, 'detail'])->name('admin.berita.detail')->middleware('auth');
Route::get('/dashboard/berita/hapus/{id}', [AdminBeritaController::class, 'hapus'])->name('admin.berita.hapus')->middleware('auth');

// kategori
Route::get('/dashboard/kategori', [AdminController::class, 'indexKategori'])->name('admin.kategori.dashboard')->middleware('auth');
Route::get('/dashboard/kategori/formtambah', [AdminKategoriController::class, 'formTambah'])->name('admin.kategori.formTambah')->middleware('auth');
Route::get('/dashboard/kategori/formubah/{id}{key}', [AdminKategoriController::class, 'formUbah'])->name('admin.kategori.formUbah')->middleware('auth');
Route::post('/dashboard/kategori/tambah', [AdminKategoriController::class, 'tambah'])->name('admin.kategori.tambah')->middleware('auth');
Route::post('/dashboard/kategori/ubah/{id}', [AdminKategoriController::class, 'ubah'])->name('admin.kategori.ubah')->middleware('auth');
Route::get('/dashboard/kategori/view/{id}{key}', [AdminKategoriController::class, 'detail'])->name('admin.kategori.detail')->middleware('auth');
Route::get('/dashboard/kategori/hapus/{id}', [AdminKategoriController::class, 'hapus'])->name('admin.kategori.hapus')->middleware('auth');

// trending
Route::get('/dashboard/trending', [AdminController::class, 'indexTrending'])->name('admin.trending.dashboard')->middleware('auth');
Route::get('/dashboard/trending/form-tambah', [TrendingController::class, 'formTambah'])->name('admin.trending.formTambah')->middleware('auth');
Route::post('/dashboard/trending/tambah', [TrendingController::class, 'tambah'])->name('admin.trending.tambah')->middleware('auth');
Route::get('/dashboard/trending/formubah/{id}{key}', [TrendingController::class, 'formUbah'])->name('admin.trending.formUbah')->middleware('auth');
Route::post('/dashboard/trending/ubah/{id}', [TrendingController::class, 'ubah'])->name('admin.trending.ubah')->middleware('auth');
Route::get('/dashboard/trending/hapus/{id}', [TrendingController::class, 'hapus'])->name('admin.trending.hapus')->middleware('auth');

// Youtube
Route::get('/dashboard/youtube', [AdminController::class, 'indexYoutube'])->name('admin.youtube.dashboard')->middleware('auth');
Route::get('/dashboard/youtube/formtambah', [YoutubeController::class, 'formTambah'])->name('admin.youtube.formTambah')->middleware('auth');
Route::post('/dashboard/youtube/tambah', [YoutubeController::class, 'tambah'])->name('admin.youtube.tambah')->middleware('auth');
Route::get('/dashboard/youtube/formubah/{id}{key}', [YoutubeController::class, 'formUbah'])->name('admin.youtube.formUbah')->middleware('auth');
Route::post('/dashboard/youtube/ubah/{id}', [YoutubeController::class, 'ubah'])->name('admin.youtube.ubah')->middleware('auth');
Route::get('/dashboard/youtube/hapus/{id}', [YoutubeController::class, 'hapus'])->name('admin.youtube.hapus')->middleware('auth');


// frontend
Route::get('/', [BeritaController::class, 'index'])->name('fe-berita.index');
Route::get('/search', [BeritaController::class, 'search'])->name('fe-berita.search');
Route::get('/category', [BeritaController::class, 'kategori'])->name('fe-berita.kategori');
Route::get('/lates-news', [BeritaController::class, 'latesNews'])->name('fe-berita.latesNews');
Route::get('/trend/{id}{judul}', [BeritaController::class, 'view'])->name('berita.view');
Route::get('/view/{id}{judul}', [BeritaController::class, 'views'])->name('berita.views');
