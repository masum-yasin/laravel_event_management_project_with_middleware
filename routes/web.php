<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditorController;


use App\Http\Controllers\frontend\EventBookingController;
use App\Http\Controllers\frontend\FrontendHomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//  Frontend Routes start
Route::get('/', function () {
    return view('/frontend.home');
})->name('home');

Route::get('/frontend/contact', function () {
    return view('frontend.contact');
})->name('contact.us');
Route::get('/frontend/about', function () {
    return view('/frontend.about');
})->name('about.us');
Route::get('/frontend/productlist', function () {
    return view('frontend.productlist');
})->name('productlist');
Route::get('/frontend/productdetail', function () {
    return view('frontend.productdetail');
})->name('productdetail');
Route::get('/frontend/allpost', function () {
    return view('frontend.allpost');
})->name('allpost');
Route::get('/frontend/singlepost', function(){
 return view('frontend.singlepost');
})->name('singlepost');
Route::get('/frontend/eventschedule', function(){
    return view('frontend.eventschedule');
   })->name('eventschedule');
   Route::get('/frontend/eventdetail',function(){
    return view('frontend.eventdetail');
   })->name('eventdetail');
//frontend Routes Ending//
//pass data frontend from backend//
Route::get('/', [FrontendHomeController::class,'index']);

Route::get('frontend/eventbooking/{id}', [EventBookingController::class,'create'])->name('frontend.eventbooking');
Route::post('booking/store',[EventBookingController::class,'store'])->name('booking.store');
Route::get('booking/edit/{id}',[EventBookingController::class,'edit'])->name('booking.edit');
Route::post('booking/update/{id}',[EventBookingController::class,'update'])->name('booking.update');
Route::get('booking/delete/{id}',[EventBookingController::class,'delete'])->name('booking.delete');




Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
     
});
// middleware editor dashboard//
Route::get('editor/login',[EditorController::class,'login'])->name('editor_login_form');
Route::post('editor/login',[EditorController::class,'store'])->name('EditorLogin');
Route::get('editor/edashobard/{type}',[EditorController::class,'edashboard'])->name('editor.edashboard')->middleware('editor');
//Admin MiddleWare//
Route::get('admin/login',[AdminController::class,'login'])->name('admin_login_form');
Route::post('admin/store',[AdminController::class,'store'])->name('AdminLogin');
Route::get('admin/dashboard/{type}',[AdminController::class,'adashboard'])->name('admin.dashboard')->middleware('admin');


require __DIR__.'/auth.php';
