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
Auth::routes();

Route::get('/', 'PageController@showIndex')->name('index');
Route::get('/nosotros', 'PageController@showNosotros')->name('nosotros');
Route::get('/contacto', 'PageController@showContacto')->name('contacto');
Route::post('/contacto', 'PageController@sendMailContacto')->name('recibirContacto');
Route::get('/perfil', 'PageController@showPerfil')->name('perfil');

// middleware para que sea admin
// DASHBOARD
Route::get('/admin/dashboard', 'DashboardController@showIndex')->name('dashboard-index');
Route::get('/admin/dashboard/user', 'DashboardController@showUsers')->name('dashboard-user');
// FIN DASHBOARD

