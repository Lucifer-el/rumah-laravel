<?php

use App\Http\Controllers\SppController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
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

Route::view('/template', 'template.master ' ) ;

route::view('/projek','template.projek') ;

route::controller(SppController::class)->group(function () {
    Route::get('/spp','index')->name('spp.index');
    Route::get('/spp/create','create')->name('spp.create');
    Route::post('/spp','store')->name('spp.store');
    Route::get('/spp/{id}/edit','edit')->name('spp.edit');
    Route::put('/spp/{id}','update')->name('spp.update');
    Route::delete('/spp/{id}','destroy')->name('spp.destroy');
 });

 Route::resource('/kelas', KelasController::class);
 
 Route::controller(RegisterController::class)->group(function () {
    Route::get('/register/create', 'create')->name('register.create');
    Route::post('/register', 'store')->name('register.store');
    Route::get('/register', 'index')->name('register.index');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('auth.login');
    Route::post('/authenticate', 'authenticate')->name('auth.authenticate');
    Route::post('/logout', 'logout')->name('auth.logout');
});

Route::middleware('can:isUser')->group(function () {
    route::resource('/kelas', KelasController::class);
});

Route::middleware('can:isAdmin')->group(function () {
    route::resource('/spp', SppController::class);  
    route::resource('/petugas', PetugasController::class);
});
