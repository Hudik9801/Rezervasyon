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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home.index');
});

//HomeTemplate için
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::post('/rezervasion',[\App\Http\Controllers\HomeController::class,'rezervasion'])->name('rezervasion_add');



//ADMİN PANEL İÇİN
Route::middleware('auth')->prefix('admin')->group(function (){

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');


    Route::get('/contact',[\App\Http\Controllers\Admin\ContactController::class,'index'])->name('admin_contact');
    Route::get('/table_open',[\App\Http\Controllers\Admin\HomeController::class,'tableopen'])->name('admin_table_open');
    Route::post('/table_open_add',[\App\Http\Controllers\Admin\HomeController::class,'tableopenadd'])->name('admin_table_open_add');
    Route::get('/table_close',[\App\Http\Controllers\Admin\HomeController::class,'tableclose'])->name('admin_table_close');
    Route::post('/table_close_add',[\App\Http\Controllers\Admin\HomeController::class,'tablecloseadd'])->name('admin_table_close_add');
    Route::get('/data_table',[\App\Http\Controllers\Admin\HomeController::class,'datatable'])->name('admin_data_table');
    Route::get('/data_table/delete/{id}',[\App\Http\Controllers\Admin\HomeController::class,'destroy'])->name('admin_data_table_delete');
    Route::get('/calendar',[\App\Http\Controllers\Admin\HomeController::class,'calendar'])->name('admin_calendar');





});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
