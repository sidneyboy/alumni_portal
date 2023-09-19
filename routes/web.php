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

Route::post('/admin_update_profile', [App\Http\Controllers\HomeController::class, 'admin_update_profile'])->name('admin_update_profile');
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

Route::get('/admin_feed/', [App\Http\Controllers\HomeController::class, 'admin_feed'])->name('admin_feed');

Route::get('/admin_view_user_timeline/{id}', [App\Http\Controllers\HomeController::class, 'admin_view_user_timeline'])->name('admin_view_user_timeline');
Route::get('/admin_view_user_photos/{id}', [App\Http\Controllers\HomeController::class, 'admin_view_user_photos'])->name('admin_view_user_photos');
Route::get('/admin_view_user_wall/{id}', [App\Http\Controllers\HomeController::class, 'admin_view_user_wall'])->name('admin_view_user_wall');
Route::post('/admin_view_user_get_comments/', [App\Http\Controllers\HomeController::class, 'admin_view_user_get_comments'])->name('admin_view_user_get_comments');
Route::post('/admin_view_user_reply/', [App\Http\Controllers\HomeController::class, 'admin_view_user_reply'])->name('admin_view_user_reply');
Route::post('/admin_view_user_timeline_reply_once_more/', [App\Http\Controllers\HomeController::class, 'admin_view_user_timeline_reply_once_more'])->name('admin_view_user_timeline_reply_once_more');


Route::get('/admin_view_user_career_path/{id}', [App\Http\Controllers\HomeController::class, 'admin_view_user_career_path'])->name('admin_view_user_career_path');


Route::post('/get_message_notif/', [App\Http\Controllers\HomeController::class, 'get_message_notif'])->name('get_message_notif');

Route::get('/admin_survey/', [App\Http\Controllers\HomeController::class, 'admin_survey'])->name('admin_survey');
Route::post('/admin_survey_proceed/', [App\Http\Controllers\HomeController::class, 'admin_survey_proceed'])->name('admin_survey_proceed');
Route::post('/admin_survey_proceed_process/', [App\Http\Controllers\HomeController::class, 'admin_survey_proceed_process'])->name('admin_survey_proceed_process');

Route::get('/admin_reports/', [App\Http\Controllers\HomeController::class, 'admin_reports'])->name('admin_reports');

Route::post('/admin_get_news_feed/', [App\Http\Controllers\HomeController::class, 'admin_get_news_feed'])->name('admin_get_news_feed');


Route::get('/user_welcome/', [App\Http\Controllers\HomeController::class, 'user_welcome'])->name('user_welcome');
Route::post('/user_update_timeline_picture/', [App\Http\Controllers\HomeController::class, 'user_update_timeline_picture'])->name('user_update_timeline_picture');
Route::post('/user_update_profile_picture/', [App\Http\Controllers\HomeController::class, 'user_update_profile_picture'])->name('user_update_profile_picture');
Route::post('/user_update_profile/', [App\Http\Controllers\HomeController::class, 'user_update_profile'])->name('user_update_profile');
Route::post('/user_post_wall/', [App\Http\Controllers\HomeController::class, 'user_post_wall'])->name('user_post_wall');
Route::post('/user_wall_reply/', [App\Http\Controllers\HomeController::class, 'user_wall_reply'])->name('user_wall_reply');
Route::get('/user_wall/{id}', [App\Http\Controllers\HomeController::class, 'user_wall'])->name('user_wall');
Route::post('/user_wall_reply_once_more/', [App\Http\Controllers\HomeController::class, 'user_wall_reply_once_more'])->name('user_wall_reply_once_more');
Route::post('/user_wall_get_comments/', [App\Http\Controllers\HomeController::class, 'user_wall_get_comments'])->name('user_wall_get_comments');


Route::get('/user_view_user/{id}', [App\Http\Controllers\HomeController::class, 'user_view_user'])->name('user_view_user');
Route::get('/user_view_user_wall/{id}', [App\Http\Controllers\HomeController::class, 'user_view_user_wall'])->name('user_view_user_wall');
Route::post('/user_view_user_wall_reply/', [App\Http\Controllers\HomeController::class, 'user_view_user_wall_reply'])->name('user_view_user_wall_reply');
Route::post('/user_view_user_reply_once_more/', [App\Http\Controllers\HomeController::class, 'user_view_user_reply_once_more'])->name('user_view_user_reply_once_more');
Route::post('/user_view_user_get_comments/', [App\Http\Controllers\HomeController::class, 'user_view_user_get_comments'])->name('user_view_user_get_comments');
Route::get('/user_view_user_photos/{id}', [App\Http\Controllers\HomeController::class, 'user_view_user_photos'])->name('user_view_user_photos');

Route::get('/user_view_path/{id}', [App\Http\Controllers\HomeController::class, 'user_view_path'])->name('user_view_path');


Route::get('/user_photos/', [App\Http\Controllers\HomeController::class, 'user_photos'])->name('user_photos');
Route::get('/user_feed/', [App\Http\Controllers\HomeController::class, 'user_feed'])->name('user_feed');
Route::post('/user_get_new_feed/', [App\Http\Controllers\HomeController::class, 'user_get_new_feed'])->name('user_get_new_feed');
Route::post('/user_announcement_reply/', [App\Http\Controllers\HomeController::class, 'user_announcement_reply'])->name('user_announcement_reply');
Route::get('/user_announcement/{id}', [App\Http\Controllers\HomeController::class, 'user_announcement'])->name('user_announcement');
Route::post('/user_announcement_reply_once_more/', [App\Http\Controllers\HomeController::class, 'user_announcement_reply_once_more'])->name('user_announcement_reply_once_more');
Route::post('/user_announcement_get_comments/', [App\Http\Controllers\HomeController::class, 'user_announcement_get_comments'])->name('user_announcement_get_comments');

Route::get('/user_survey/', [App\Http\Controllers\HomeController::class, 'user_survey'])->name('user_survey');
Route::post('/user_survey_process/', [App\Http\Controllers\HomeController::class, 'user_survey_process'])->name('user_survey_process');


Route::get('/user_path/', [App\Http\Controllers\HomeController::class, 'user_path'])->name('user_path');
Route::post('/user_update_career_path/', [App\Http\Controllers\HomeController::class, 'user_update_career_path'])->name('user_update_career_path');

Route::get('/admin_career_reports/', [App\Http\Controllers\HomeController::class, 'admin_career_reports'])->name('admin_career_reports');
Route::post('/admin_year_graduated_show/', [App\Http\Controllers\HomeController::class, 'admin_year_graduated_show'])->name('admin_year_graduated_show');





Route::post('/graduate_registration', [App\Http\Controllers\Graduates_registration_controller::class, 'graduate_registration'])->name('graduate_registration');
Route::get('/career_path/{id}', [App\Http\Controllers\Graduates_registration_controller::class, 'career_path'])->name('career_path');
Route::post('/career_path_save/', [App\Http\Controllers\Graduates_registration_controller::class, 'career_path_save'])->name('career_path_save');

