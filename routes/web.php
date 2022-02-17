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

// Route::get('/', function () {
//     return view('master');
// });

Route::get('/', [App\Http\Controllers\BeritaController::class, 'index'])->name('pages.berita');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('pages.profile');
Route::get('/agenda', [App\Http\Controllers\AgendaController::class, 'index'])->name('pages.agenda');
Route::get('/fasilitas', [App\Http\Controllers\FasilitasController::class, 'index'])->name('pages.fasilitas');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('pages.dashboard');
Route::get('/datatablejemaat', [App\Http\Controllers\DatatableJemaatController::class, 'index'])->name('pages.datatablejemaat');

//jemaat
Route::get('/majelis', [App\Http\Controllers\MajelisController::class, 'index'])->name('jemaat.majelis');
Route::get('/komisianak', [App\Http\Controllers\KomisiAnakController::class, 'index'])->name('jemaat.komisianak');
Route::get('/komisikehartaan', [App\Http\Controllers\KomisiKehartaanController::class, 'index'])->name('jemaat.komisikehartaan');
Route::get('/komisipembangunan', [App\Http\Controllers\KomisiPembangunanController::class, 'index'])->name('jemaat.komisipembangunan');
Route::get('/komisipemuda', [App\Http\Controllers\KomisiPemudaController::class, 'index'])->name('jemaat.komisipemuda');
Route::get('/komisiwanita', [App\Http\Controllers\KomisiWanitaController::class, 'index'])->name('jemaat.komisiwanita');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
