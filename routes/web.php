<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandOwnerRegisterController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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
Auth::routes(['verify' => true]);

//ルート
Route::get('/', [ItemController::class,'index']);

//Email Verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


//items
Route::get('/items/{id}/edit',[ItemController::class,'edit'])->name('items.edit');
Route::post('/items/{id}/edit',[ItemController::class,'update'])->name('items.update');
Route::get('/items/create', [ItemController::class,'create'])->name('items.create');
Route::post('/items/create', [ItemController::class,'store'])->name('items.store');
Route::get('/items/{id}/{item}',[ItemController::class,'show'])->name('items.show');
Route::get('/items/my-items',[ItemController::class,'myitems'])->name('items.myitems');
Route::get('/items/all-items',[ItemController::class,'allitems'])->name('items.allitems');
Route::get('/items/applications',[ItemController::class,'applicant'])->name('items.applicants');



//brand
Route::get('/brands/{id}/{brand}',[BrandController::class,'index'])->name('brand.index');
Route::get('/brands/create',[BrandController::class,'create'])->name('brand.view');
Route::post('/brands/create',[BrandController::class,'store'])->name('brand.store');
Route::post('/brands/logo',[BrandController::class,'brandLogo'])->name('brandlogo');
Route::post('/brands/coverphoto',[BrandController::class,'coverPhoto'])->name('cover.photo');

//user profile
Route::get('/user/profile',[UserController::class,'index'])->name('user.profile');
Route::post('/user/profile/create',[UserController::class,'store'])->name('profile.create');
Route::post('/user/coverletter',[UserController::class,'coverletter'])->name('cover.letter');
Route::post('/user/resume',[UserController::class,'resume'])->name('resume');
Route::post('/user/avatar',[UserController::class,'avatar'])->name('avatar');

//brand-owner view
Route::view('brand-owner/register','auth.brand-owner-register')->name('brand_owner.register');
Route::post('brand-owner/register',[BrandOwnerRegisterController::class,'brandownerRegister'])->name('brd.register');
Route::post('/applications/{id}',[ItemController::class,'apply'])->name('apply');


//home
Route::get('/home',[HomeController::class,'index']);


