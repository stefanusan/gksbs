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

Route::middleware('auth')->group(function () {

    //admin
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/agendaadmin', [App\Http\Controllers\AgendaController::class, 'indexadmin'])->name('admin.agenda');
    Route::get('/fasilitasadmin', [App\Http\Controllers\FasilitasController::class, 'indexadmin'])->name('admin.fasilitas');
    Route::get('/datatablejemaatadmin', [App\Http\Controllers\DatatableJemaatController::class, 'indexadmin'])->name('admin.datatablejemaat');
    
    Route::get('/agendaadmin1', [App\Http\Controllers\AgendaController::class, 'indexadminagenda1'])->name('admin.agenda1');
    Route::get('/agendaadmin2', [App\Http\Controllers\AgendaController::class, 'indexadminagenda2'])->name('admin.agenda2');
    Route::get('/agendaadmin3', [App\Http\Controllers\AgendaController::class, 'indexadminagenda3'])->name('admin.agenda3');
    Route::get('/agendaadmin4', [App\Http\Controllers\AgendaController::class, 'indexadminagenda4'])->name('admin.agenda4');
    Route::get('/agendaadmin5', [App\Http\Controllers\AgendaController::class, 'indexadminagenda5'])->name('admin.agenda5');
    

    //CRUD Fasilitas
    Route::get('addfasilitas', [App\Http\Controllers\FasilitasController::class, 'create']);
    Route::post('addfasilitas', [App\Http\Controllers\FasilitasController::class, 'store']);
    Route::get('editfasilitas/{id}', [App\Http\Controllers\FasilitasController::class, 'edit']);
    Route::put('updatefasilitas/{id}', [App\Http\Controllers\FasilitasController::class, 'update']);
    Route::get('deletefasilitas/{id}', [App\Http\Controllers\FasilitasController::class, 'destroy']);

    //CRUD Berita
    Route::get('addberita', [App\Http\Controllers\BeritaController::class, 'create']);
    Route::post('addberita', [App\Http\Controllers\BeritaController::class, 'store']);
    Route::get('editberita/{id}', [App\Http\Controllers\HomeController::class, 'edit']);
    Route::put('updateberita/{id}', [App\Http\Controllers\HomeController::class, 'update']);
    Route::get('deleteberita/{id}', [App\Http\Controllers\HomeController::class, 'destroy']);
    
    //CRUD Agenda1
    Route::get('addagenda1', [App\Http\Controllers\AgendaController::class, 'create']);
    Route::post('addagenda1', [App\Http\Controllers\AgendaController::class, 'store']);
    Route::get('editagenda1/{id}', [App\Http\Controllers\AgendaController::class, 'edit']);
    Route::put('updateagenda1/{id}', [App\Http\Controllers\AgendaController::class, 'update']);
    Route::get('deleteagenda1/{id}', [App\Http\Controllers\AgendaController::class, 'destroy']);

    //Edit saja jiwa
    Route::get('editdatatablejemaat/{id}', [App\Http\Controllers\DatatableJemaatController::class, 'edit']);
    Route::put('updatedatatablejemaat/{id}', [App\Http\Controllers\DatatableJemaatController::class, 'update']);

});
