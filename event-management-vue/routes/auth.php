<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\backend\CategoryController;
// use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\EmplyEvantCategoryController;
use App\Http\Controllers\backend\EmplyEvantController;
use App\Http\Controllers\backend\EquipmentCompanyController;
use App\Http\Controllers\backend\EquipmentServiceController;
use App\Http\Controllers\backend\EventtypeController;
use App\Http\Controllers\backend\PostBlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\ScheduleController;
use App\Http\Controllers\backend\SpeakerController;
use App\Http\Controllers\backend\SponsorController;
use App\Http\Controllers\backend\VenueController;
use App\Http\Controllers\frontend\CustomerController;
use App\Http\Controllers\frontend\ReviewController;
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
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

// product Routing Start//
Route::get('product',[ProductController::class,'index'])->name('product.index');
Route::get('product/show/{id}',[ProductController::class,'show'])->name('product.show');
Route::get('product/create',[ProductController::class,'create'])->name('product.create');
Route::post('product/store',[ProductController::class,'store'])->name('product.store');
Route::get('product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::get('product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');



// Category Routing Start//
Route::get('/category',[CategoryController::class,'index'])->name('category.index');
Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');



// customer Route section start//

Route::get('customer/create', [CustomerController::class,'create'])->name('customer_login_form');
Route::get('customer/register', [CustomerController::class,'register'])->name('customer.register');
Route::post('customer/registerStore', [CustomerController::class,'registerStore'])->name('customer.registerStore');

Route::post('customer/login', [CustomerController::class,'login'])->name('customerLogin');
Route::post('customer/logout', [CustomerController::class, 'logout'])->name('customer.logout');
Route::get('customer/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard')->middleware('customer');
Route::get('customer/mybooking', [CustomerController::class, 'mybooking'])->name('customer.mybooking');
// Here are resource Routing Start//




// Employee Evant Categories Route resource 
Route::resource('employeelist',EmplyEvantController::class);

// Eventtype Route Show for frontend 
Route::resource('eventtype',EventtypeController::class);
//Blog Route for show frontend
Route::resource('blogpost',PostBlogController::class);
// sponsors company  Routing//
Route::resource('sponsor',SponsorController::class);
// Event Schedule Routing//
Route::resource('schedule',ScheduleController::class);
//Venu Routing //
Route::resource('eventvenues',VenueController::class);
// event Routing//
Route::resource('eventspeaker',SpeakerController::class);
// Review Routing
Route::resource('userreview',ReviewController::class);
Route::post('review/status/{id}',[ReviewController::class,'status'])->name('review.status');

//Contact Routing//
Route::resource('contact', ContactController::class);
Route::resource('company',EquipmentCompanyController::class);
Route::resource('servicelist',EquipmentServiceController::class);
