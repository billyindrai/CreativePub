<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CollectionController;


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

Route::get('/',[GalleryController::class, 'showGalleryHome'])->name('gallery.home');
Route::get('/gallery_images',[GalleryController::class, 'showGalleryImagesHome'])->name('gallery.images.home');
Route::get('/gallery_video',[GalleryController::class, 'showGalleryVideoHome'])->name('gallery.video.home');
Route::get('/gallery_audio',[GalleryController::class, 'showGalleryAudioHome'])->name('gallery.audio.home');
Route::get('/gallery_script',[GalleryController::class, 'showGalleryScriptHome'])->name('gallery.script.home');
Route::get('/home_collection_all',[CollectionController::class, 'showCollectionHome'])->name('collection.home');
Route::get('/collection_images',[CollectionController::class, 'showCollectionImagesHome'])->name('collection.images.home');
Route::get('/collection_video',[CollectionController::class, 'showCollectionVideoHome'])->name('collection.video.home');
Route::get('/collection_audio',[CollectionController::class, 'showCollectionAudioHome'])->name('collection.audio.home');
Route::get('/collection_script',[CollectionController::class, 'showCollectionScriptHome'])->name('collection.images.home');
Route::get('/profile',[GalleryController::class, 'showGalleryProfile'])->name('profile');
Route::get('/profile_collection',[CollectionController::class, 'showCollectionProfile'])->name('profile.collection');
Route::get('/profile_draft_collection',[CollectionController::class, 'showDraftCollectionProfile'])->name('profile.draft.collection');
Route::get('/profile_draft_gallery',[GalleryController::class, 'showDraftGalleryProfile'])->name('profile.draft.gallery');
Route::post('/show_comments',[GalleryController::class, 'showComments'])->name('show.comments');
Route::post('/input_comment',[GalleryController::class, 'storeComments'])->name('store.comments');


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

Route::get('/upload_gallery', function () {
    return view('upload_gallery_page');
});

Route::get('/upload_collection', function () {
    return view('upload_collection_page');
});

Route::get('/jobs',[JobController::class, 'index']);
Route::get('/draft_jobs',[JobController::class, 'indexDraftJob'])->name('show_draft_jobs');
Route::get('/job_detail',[JobController::class, 'indexDetailJob']);
Route::post('/apply_job',[JobController::class, 'userApplyJob']);
Route::get('/my_jobs',[JobController::class, 'indexMyJobs']);
Route::get('/posted_jobs',[JobController::class, 'indexPostedJobs'])->name('show_posted_jobs');
Route::post('/delete_posted_job',[JobController::class, 'deletePostedJob']);
Route::post('/publish_draft_jobs',[JobController::class, 'postDraftJob']);
Route::post('/acceptCreator',[JobController::class, 'acceptCreator']);
Route::post('/show_applicants',[JobController::class, 'showApplicantsPostedJobs'])->name('show.applicant');
Route::get('/edit_job/{job}',[JobController::class, 'editJob']);
Route::post('/store_edited_job',[JobController::class, 'storedEditedJob']);
Route::post('/delete_draft_job',[JobController::class, 'deleteDraftJob']);









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
