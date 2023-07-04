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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/login_authenticator', [App\Http\Controllers\login_authenticator_controller::class, 'login_authenticator'])->name('login_authenticator');
Route::get('/admin_login', [App\Http\Controllers\login_authenticator_controller::class, 'admin_login'])->name('admin_login');

Route::get('/admin_update_profile', [App\Http\Controllers\HomeController::class, 'admin_update_profile'])->name('admin_update_profile');
Route::post('/admin_update_profile_picture', [App\Http\Controllers\HomeController::class, 'admin_update_profile_picture'])->name('admin_update_profile_picture');
Route::post('/admin_update_timeline_picture', [App\Http\Controllers\HomeController::class, 'admin_update_timeline_picture'])->name('admin_update_timeline_picture');
Route::post('/admin_post_announcement', [App\Http\Controllers\HomeController::class, 'admin_post_announcement'])->name('admin_post_announcement');
Route::post('/admin_reply_announcement', [App\Http\Controllers\HomeController::class, 'admin_reply_announcement'])->name('admin_reply_announcement');

Route::post('admin_announcement/admin_reply_announcement_once_more', [App\Http\Controllers\HomeController::class, 'admin_reply_announcement_once_more'])->name('admin_reply_announcement_once_more');



Route::post('/admin_post_wall', [App\Http\Controllers\HomeController::class, 'admin_post_wall'])->name('admin_post_wall');

Route::get('/admin_announcement/{id}', [App\Http\Controllers\HomeController::class, 'admin_announcement'])->name('admin_announcement');

Route::post('/home_announcement_get_comments/', [App\Http\Controllers\HomeController::class, 'home_announcement_get_comments'])->name('home_announcement_get_comments');



Route::post('/graduate_registration', [App\Http\Controllers\Graduates_registration_controller::class, 'graduate_registration'])->name('graduate_registration');

