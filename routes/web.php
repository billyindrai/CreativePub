<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\JobController;

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

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/edit_profile', function () {
    return view('edit_profile_general');
});

Route::get('/edit_profile_social', function () {
    return view('edit_profile_social');
});

Route::get('/edit_profile_bank', function () {
    return view('edit_profile_bank');
});

Route::get('/premium', function () {
    return view('premium_page');
});


Route::get('/edit_profile_password', function () {
    return view('edit_profile_password');
});

Route::get('/upload_job', function () {
    return view('upload_job_page');
});

Route::get('/jobs',[JobController::class, 'index']);
Route::get('/draft_jobs',[JobController::class, 'indexDraftJob']);
Route::get('/job_detail',[JobController::class, 'indexDetailJob']);
Route::post('/apply_job',[JobController::class, 'userApplyJob']);
Route::get('/my_jobs',[JobController::class, 'indexMyJobs']);
Route::get('/posted_jobs',[JobController::class, 'indexPostedJobs']);
Route::post('/delete_posted_job',[JobController::class, 'deletePostedJob']);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
