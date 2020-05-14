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

Route::get('/', 'PagesController@showIndex')->name('index');
Route::get('/nosotros', 'PagesController@showNosotros')->name('nosotros');
Route::get('/contacto', 'PagesController@showContacto')->name('contacto');
Route::post('/contacto', 'PagesController@sendMailContacto')->name('recibirContacto');
Route::get('/perfil', 'PagesController@showPerfil')->name('perfil')->middleware('auth');
Route::get('/blog', 'PagesController@showBlog')->name('blog');
Route::get('/blog/articulo/{id}', 'PagesController@showArticle')->name('articulo');

// middleware para que sea admin
// DASHBOARD
Route::get('/admin/dashboard', 'DashboardController@showIndex')->name('dashboard-index')->middleware('isAdmin');
Route::get('/admin/dashboard/user', 'DashboardController@showUsers')->name('dashboard-user')->middleware('isAdmin');
Route::get('/admin/dashboard/blog', 'DashboardController@showBlog')->name('dashboard-blog')->middleware('isAdmin');
Route::get('/admin/dashboard/blog/create', 'DashboardController@addArticle')->name('dashboard-add-article')->middleware('isAdmin');
Route::post('/admin/dashboard/blog/create', 'DashboardController@storeArticle')->name('dashboard-store-article')->middleware('isAdmin');
Route::put('/admin/dashboard/blog/changeVisibility', 'DashboardController@changeVisibility')->name('dashboard-article-visibility')->middleware('isAdmin');
Route::get('/admin/dashboard/blog/edit/{id}', 'DashboardController@editArticle')->name('dashboard-edit-article')->middleware('isAdmin');
Route::put('/admin/dashboard/blog/edit/{id}', 'DashboardController@updateArticle')->name('dashboard-update-article')->middleware('isAdmin');
Route::delete('/admin/dashboard/blog/delete/{id}', 'DashboardController@deleteArticle')->name('dashboard-delete-article')->middleware('isAdmin');

// FIN DASHBOARD

