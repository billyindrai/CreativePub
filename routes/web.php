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

Route::get('/login', function () {
    return view('login_page');
});

Route::get('/register', function () {
    return view('register_page');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/upload_galery', function () {
    return view('upload_galery_page');
});

Route::get('/upload_collection', function () {
    return view('upload_collection_page');
});

Route::get('/upload_job', function () {
    return view('upload_job_page');
});


Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/job_details', function () {
    return view('job_details');
});

Route::get('/my_jobs', function () {
    return view('my_jobs');
});

Route::get('/premium', function () {
    return view('premium_page');
});

Route::get('/payment', function () {
    return view('payment_page');
});

Route::get('/posted_jobs', function () {
    return view('posted_jobs');
});

Route::get('/draft_jobs', function () {
    return view('draft_jobs');
});

Route::get('/edit_jobs', function () {
    return view('edit_jobs');
});

Route::get('/edit_profile', function () {
    return view('edit_profile_general');
});

Route::get('/edit_profile_password', function () {
    return view('edit_profile_password');
});

Route::get('/edit_profile_social', function () {
    return view('edit_profile_social');
});

Route::get('/edit_profile_bank', function () {
    return view('edit_profile_bank');
});

Route::get('/monetize', function () {
    return view('monetize');
});

Route::get('/edit_gallery', function () {
    return view('edit_gallery');
});