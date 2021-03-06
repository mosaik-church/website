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

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);


Route::statamic('users', 'user.index');
Route::statamic('users/{username}', 'user.profile');
Route::statamic('account', 'user.account');
Route::statamic('register', 'auth.register');
Route::statamic('forgot-password', 'auth.password-forgot');
Route::statamic('reset-password', 'auth.password-reset');
Route::get('/media/series/{id}', function($id){
    return redirect('/sermon-series');
});

Route::statamic('/feed/podcast', 'podcasts.feed', ["layout" => null, "content_type" => 'application/xml']);

Route::permanentRedirect('login', 'cp');
Route::permanentRedirect('live', '/besuche-uns/gottesdienst');
Route::permanentRedirect('besuche-uns/anmeldung', '/besuche-uns/gottesdienst#anmeldung');
Route::permanentRedirect('mitmachen/homezones/homezone-finden.html', '/mitmachen/homezones/homezonefinder');
Route::permanentRedirect('homezones.html', '/mitmachen/homezones');
Route::permanentRedirect('medien/predigten.html', '/media/predigten');
Route::permanentRedirect('mitmachen/sommerbibelschule.html', '/mitmachen/sommerbibelschule');
Route::permanentRedirect('medien/predigten/detail/sermon/gesunde-sexualitaet.html', '/media/gesunde-sexualitaet');
Route::permanentRedirect('medien/*', '/');
