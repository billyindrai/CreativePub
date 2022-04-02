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
