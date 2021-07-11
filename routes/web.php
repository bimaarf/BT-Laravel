<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TrendingController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\BeritaPendingController;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Trending;
use App\Models\Kontak;
use App\Models\BeritaPending;
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
// berita pending
Route::post('/dashboard/pending/tambah', [BeritaPendingController::class, 'tambah'])->name('admin.pending.tambah')->middleware('auth');
Route::get('/dashboard/pending', [AdminController::class,'indexPending'])->name('admin.pending.dashboard')->middleware(['auth', 'role:admin|owner']);
Route::post('/dashboard/pending/tambah', [BeritaPendingController::class, 'tambah'])->name('admin.pending.tambah')->middleware('auth');
Route::get('/dashboard/pending/view/{key}', [BeritaPendingController::class, 'detail'])->name('admin.pending.detail')->middleware(['auth', 'role:admin|owner']);
Route::get('/dashboard/pending/formubah/{key}', [BeritaPendingController::class, 'formUbah'])->name('admin.pending.formUbah')->middleware(['auth', 'role:admin|owner']);
Route::post('/dashboard/pending/ubah/{key}', [BeritaPendingController::class, 'ubah'])->name('admin.pending.ubah')->middleware('auth');
Route::get('/dashboard/pending/hapus/{id}', [BeritaPendingController::class, 'hapus'])->name('admin.pending.hapus')->middleware(['auth', 'role:owner']);
Route::get('/dashboard/pending/publish', [BeritaPendingController::class,'publish'])->name('admin.pending.publish')->middleware(['auth', 'role:admin|owner']);


// berita
Route::get('/dashboard', [SiteController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/berita', [AdminController::class,'indexBerita'])->name('admin.berita.dashboard')->middleware(['auth', 'role:admin|owner']);
Route::get('/dashboard/berita/form-tambah', [AdminBeritaController::class, 'formTambah'])->name('admin.berita.formTambah')->middleware(['auth', 'role:admin|owner']);
Route::post('/dashboard/berita/tambah', [AdminBeritaController::class, 'tambah'])->name('admin.berita.tambah')->middleware('auth');
Route::get('/dashboard/berita/formubah/{key}', [AdminBeritaController::class, 'formUbah'])->name('admin.berita.formUbah')->middleware(['auth', 'role:admin|owner']);
Route::post('/dashboard/berita/ubah/{key}', [AdminBeritaController::class, 'ubah'])->name('admin.berita.ubah')->middleware('auth');
Route::get('/dashboard/berita/view/{key}', [AdminBeritaController::class, 'detail'])->name('admin.berita.detail')->middleware(['auth', 'role:admin|owner']);
Route::get('/dashboard/berita/hapus/{id}', [AdminBeritaController::class, 'hapus'])->name('admin.berita.hapus')->middleware(['auth', 'role:owner']);

// kategori
Route::get('/dashboard/kategori', [AdminController::class, 'indexKategori'])->name('admin.kategori.dashboard')->middleware(['auth', 'role:admin|owner']);
Route::get('/dashboard/kategori/formtambah', [AdminKategoriController::class, 'formTambah'])->name('admin.kategori.formTambah')->middleware(['auth', 'role:admin|owner']);
Route::get('/dashboard/kategori/formubah/{id}{key}', [AdminKategoriController::class, 'formUbah'])->name('admin.kategori.formUbah')->middleware(['auth', 'role:admin|owner']);
Route::post('/dashboard/kategori/tambah', [AdminKategoriController::class, 'tambah'])->name('admin.kategori.tambah')->middleware('auth');
Route::post('/dashboard/kategori/ubah/{id}', [AdminKategoriController::class, 'ubah'])->name('admin.kategori.ubah')->middleware('auth');
Route::get('/dashboard/kategori/view/{id}{key}', [AdminKategoriController::class, 'detail'])->name('admin.kategori.detail')->middleware(['auth', 'role:admin|owner']);
Route::get('/dashboard/kategori/hapus/{id}', [AdminKategoriController::class, 'hapus'])->name('admin.kategori.hapus')->middleware(['auth', 'role:owner']);

// trending
Route::get('/dashboard/trending', [AdminController::class, 'indexTrending'])->name('admin.trending.dashboard')->middleware(['auth', 'role:admin|owner']);
Route::get('/dashboard/trending/form-tambah', [TrendingController::class, 'formTambah'])->name('admin.trending.formTambah')->middleware(['auth', 'role:admin|owner']);
Route::post('/dashboard/trending/tambah', [TrendingController::class, 'tambah'])->name('admin.trending.tambah')->middleware('auth');
Route::get('/dashboard/trending/formubah/{id}{key}', [TrendingController::class, 'formUbah'])->name('admin.trending.formUbah')->middleware(['auth', 'role:admin|owner']);
Route::post('/dashboard/trending/ubah/{id}', [TrendingController::class, 'ubah'])->name('admin.trending.ubah')->middleware('auth');
Route::get('/dashboard/trending/hapus/{id}', [TrendingController::class, 'hapus'])->name('admin.trending.hapus')->middleware(['auth', 'role:admin|owner']);

// Kontak
Route::get('/dashboard/kontak', [AdminController::class, 'indexKontak'])->name('admin.kontak.dashboard')->middleware(['auth', 'role:admin|owner']);
Route::post('/kontak/tambah', [KontakController::class, 'tambah'])->name('kontak.tambah');
Route::get('/dashboard/kontak/view/{id}', [KontakController::class, 'detail'])->name('admin.kontak.detail')->middleware(['auth', 'role:admin|owner']);
Route::get('/kontak/hapus/{id}', [KontakController::class, 'hapus'])->name('admin.kontak.hapus')->middleware(['auth', 'role:admin|owner']);


// frontend
Route::get('/', [BeritaController::class, 'index'])->name('fe-berita.index');
Route::get('/search', [BeritaController::class, 'search'])->name('fe-berita.search');
Route::get('/category', [BeritaController::class, 'kategori'])->name('fe-berita.kategori');
Route::get('/contact', [BeritaController::class, 'kontak'])->name('fe-berita.kontak');
Route::get('/lates-news', [BeritaController::class, 'latesNews'])->name('fe-berita.latesNews');
// Route::get('/t/{key}', [BeritaController::class, 'view'])->name('berita.view');
Route::get('/v/{key}', [BeritaController::class, 'views'])->name('berita.views');
