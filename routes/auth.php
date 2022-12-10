<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CollectionController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);



    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});


Route::post('/pay_premium', [AuthenticatedSessionController::class, 'pay']);
Route::post('/payment_finish', [AuthenticatedSessionController::class, 'paymentFinished']);
Route::post('/edit_profile_general', [AuthenticatedSessionController::class, 'updateProfileGeneral']);
Route::post('/edit_profile_password', [AuthenticatedSessionController::class, 'updateProfilePassword']);
Route::post('/edit_profile_social', [AuthenticatedSessionController::class, 'updateProfileSocial']);
Route::post('/edit_profile_bank', [AuthenticatedSessionController::class, 'updateProfileBank']);
Route::post('/upload_job', [JobController::class, 'store']);
Route::post('/upload_gallery_no_cover', [GalleryController::class, 'storeWithoutCover']);
Route::post('/upload_gallery_cover', [GalleryController::class, 'storeFinalize']);
Route::post('/delete_gallery_user', [GalleryController::class, 'deleteGallery']);
Route::get('/edit_gallery/{gallery}',[GalleryController::class, 'editGallery']);
Route::post('/edit_gallery_no_cover',[GalleryController::class, 'storeEditWithoutCover']);
Route::post('/edit_gallery_cover', [GalleryController::class, 'storeEditFinalize']);
Route::post('/upload_collection_no_cover', [CollectionController::class, 'storeWithoutCover']);
Route::post('/upload_collection_cover', [CollectionController::class, 'storeFinalize']);
Route::post('/delete_collection_user', [CollectionController::class, 'deleteCollection']);
Route::get('/edit_collection/{collection}',[CollectionController::class, 'editCollection']);
Route::post('/edit_collection_no_cover',[CollectionController::class, 'storeEditWithoutCover']);
Route::post('/edit_collection_cover', [CollectionController::class, 'storeEditFinalize']);
Route::get('/admin',[AuthenticatedSessionController::class, 'adminShowAccount']);
Route::get('/admin_job',[AuthenticatedSessionController::class, 'adminShowJob']);
Route::get('/admin_collection',[AuthenticatedSessionController::class, 'adminShowCollection']);
Route::get('/admin_gallery',[AuthenticatedSessionController::class, 'adminShowGallery']);
Route::get('/admin_approval',[AuthenticatedSessionController::class, 'adminShowApproval']);
Route::get('/admin_monetize',[AuthenticatedSessionController::class, 'adminShowMonetize']);
Route::get('/admin_premium',[AuthenticatedSessionController::class, 'adminShowRequest']);
Route::post('/confirm_request',[AuthenticatedSessionController::class, 'adminConfirmRequest']);
Route::post('/finish_monetize',[AuthenticatedSessionController::class, 'adminFinishMonetize']);
Route::post('/delete_account',[AuthenticatedSessionController::class, 'adminDeleteAccount']);
Route::post('/delete_job',[AuthenticatedSessionController::class, 'adminDeleteJob']);
Route::post('/delete_collection',[AuthenticatedSessionController::class, 'adminDeleteCollection']);
Route::post('/delete_gallery',[AuthenticatedSessionController::class, 'adminDeleteGallery']);
Route::post('/delete_approval',[AuthenticatedSessionController::class, 'adminDeleteApproval']);
Route::post('/search_user',[AuthenticatedSessionController::class, 'adminSearchAccount']);
Route::post('/search_job',[AuthenticatedSessionController::class, 'adminSearchJob']);
Route::post('/search_collection',[AuthenticatedSessionController::class, 'adminSearchCollection']);
Route::post('/search_gallery',[AuthenticatedSessionController::class, 'adminSearchGallery']);
Route::post('/approve_collection',[AuthenticatedSessionController::class, 'adminApproval']);
Route::get('/monetize',[AuthenticatedSessionController::class, 'showMonetize']);
Route::post('/withdraw_monetize',[AuthenticatedSessionController::class, 'submitMonetize']);


















