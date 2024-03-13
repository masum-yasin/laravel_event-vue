<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\PdfController;
use App\Http\Controllers\backend\ScheduleController;
use App\Http\Controllers\backend\SpeakerController;
use App\Http\Controllers\EditorController;


use App\Http\Controllers\frontend\EventBookingController;
use App\Http\Controllers\frontend\FrontendHomeController;
use App\Http\Controllers\frontend\ScheduleController as FrontendScheduleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/', function (){
//     return Inertia::render('Home');
// })->name('home');

// Route::get('speaker',function(){
//     return Inertia::render('Speaker');
// })->name('speaker');
// Route::get('schedule',function(){
//     return Inertia::render('Schedule');
// })->name('schedule');
// Route::get('contact',function(){
//     return Inertia::render('Contact');
// })->name('contact');
// Route::get('sponsor',function(){
//     return Inertia::render('Sponsor');
// })->name('sponsor');


Route::get('/', [FrontendHomeController::class,'index'])->name('home');
// Route::get('review', [FrontendHomeController::class,'review'])->name('review');
Route::get('blog',[FrontendHomeController::class,'blog'])->name('blog');
// Route::get('singleblog',[FrontendHomeController::class,'SingeBlog'])->name('singleblog');
Route::get('speaker',[FrontendHomeController::class,'speaker'])->name('speaker');
// Route::get('speakerdetail',[FrontendHomeController::class,'SpeakerDetail'])->name('speakerdetail');

Route::get('/about', [FrontendHomeController::class,'about'])->name('about');
Route::get('eventschedule',[FrontendHomeController::class,'schedule'])->name('eventschedule');



// Frontend Booking//
Route::get('frontend/booking', [EventBookingController::class,'index'])->name('booking.index');
Route::get('frontend/eventbooking/{id}', [EventBookingController::class,'create'])->name('frontend.eventbooking')->middleware('customer'); // customer middleware
Route::post('booking/store', [EventBookingController::class, 'store'])->name('booking.store');
// for customer booking status//
Route::post('booking/status/{id}', [EventBookingController::class,'status'])->name('booking.status');

Route::get('booking/delete/{id}',[EventBookingController::class,'delete'])->name('frontend.booking');

// middleware editor dashboard//
Route::get('editor/login',[EditorController::class,'login'])->name('editor_login_form');
Route::post('editor/login',[EditorController::class,'store'])->name('EditorLogin');
Route::post('editor/logout',[EditorController::class,'destroy'])->name('editor.logout');
Route::get('editor/edashobard',[EditorController::class,'edashboard'])->name('editor.edashboard')->middleware('editor');




//Admin MiddleWare//
Route::get('admin/login',[AdminController::class,'login'])->name('admin_login_form');
Route::post('admin/store',[AdminController::class,'store'])->name('AdminLogin');
Route::post('admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('admin/dashboard',[AdminController::class,'adashboard'])->name('admin.dashboard')->middleware('admin');




// Volunteer Middleware
Route::get('volunteer/login',[VolunteerController::class,'login'])->name('volunteer_login_form');
Route::post('volunteer/store',[VolunteerController::class,'store'])->name('volunteerLogin');
Route::get('volunteer/voldashboard',[VolunteerController::class,'voldashboard'])->name('volunteer.voldashboard')->middleware('volunteer');





Route::get('invoice',[PdfController::class,'generate_pdf']);
Route::get('invoice/{id}',[PdfController::class,'generate_pdf'])->name('invoiceperid');
Route::get('download-pdf',[PdfController::class,'download_pdf']);


require __DIR__.'/auth.php';
