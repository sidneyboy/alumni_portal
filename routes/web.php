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
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');


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
Route::post('/admin_announcement_get_comments/', [App\Http\Controllers\HomeController::class, 'admin_announcement_get_comments'])->name('admin_announcement_get_comments');

Route::post('/admin_wall_reply', [App\Http\Controllers\HomeController::class, 'admin_wall_reply'])->name('admin_wall_reply');
Route::get('/admin_wall/{id}', [App\Http\Controllers\HomeController::class, 'admin_wall'])->name('admin_wall');
Route::post('admin_wall/admin_wall_reply_once_more/', [App\Http\Controllers\HomeController::class, 'admin_wall_reply_once_more'])->name('admin_wall_reply_once_more');
Route::post('/admin_wall_get_comments/', [App\Http\Controllers\HomeController::class, 'admin_wall_get_comments'])->name('admin_wall_get_comments');


Route::get('/admin_about/', [App\Http\Controllers\HomeController::class, 'admin_about'])->name('admin_about');
Route::get('/admin_photos/', [App\Http\Controllers\HomeController::class, 'admin_photos'])->name('admin_photos');

Route::get('/admin_user_list/', [App\Http\Controllers\HomeController::class, 'admin_user_list'])->name('admin_user_list');
Route::post('/admin_update_user_type/', [App\Http\Controllers\HomeController::class, 'admin_update_user_type'])->name('admin_update_user_type');
Route::get('/admin_user_search/', [App\Http\Controllers\HomeController::class, 'admin_user_search'])->name('admin_user_search');




Route::get('/user_view_timeline/{id}', [App\Http\Controllers\HomeController::class, 'user_view_timeline'])->name('user_view_timeline');
Route::get('/user_view_photos/{id}', [App\Http\Controllers\HomeController::class, 'user_view_photos'])->name('user_view_photos');


Route::post('/graduate_registration', [App\Http\Controllers\Graduates_registration_controller::class, 'graduate_registration'])->name('graduate_registration');
