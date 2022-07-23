<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavouriteController;
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

//home
Route::get('/buyer/profile',[HomeController::class,'index'])->name('home');


//ルート
Route::get('/', [ItemController::class,'index'])->name('index');

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
Route::get('/items',[ItemController::class,'welcome'])->name('items.welcome');
Route::get('/items/{id}/edit',[ItemController::class,'edit'])->name('items.edit');
Route::post('/items/{id}/edit',[ItemController::class,'update'])->name('items.update');
Route::get('/items/create', [ItemController::class,'create'])->name('items.create');
Route::post('/items/create', [ItemController::class,'store'])->name('items.store');
Route::get('/items/{id}/{item}',[ItemController::class,'show'])->name('items.show');
Route::get('/items/my-items',[ItemController::class,'myitems'])->name('items.myitems');
Route::get('/items/all-items',[ItemController::class,'allitems'])->name('items.allitems');
Route::get('/items/applications',[ItemController::class,'applicant'])->name('items.applicants');



//brand profile
Route::get('/brands/{id}/{brand}',[BrandController::class,'index'])->name('brand.index');
Route::get('/brands/profile',[BrandController::class,'create'])->name('brand.view');
Route::post('/brands/profile',[BrandController::class,'store'])->name('brand.store');
Route::post('/brands/logo',[BrandController::class,'brandLogo'])->name('brandlogo');
Route::post('/brands/coverphoto',[BrandController::class,'coverPhoto'])->name('cover.photo');
Route::get('/brands/all-brands',[UserController::class,'allbrands'])->name('brand.allbrands');


//buyer profile
Route::get('/buyer/{id}/{buyer}',[UserController::class,'buyerProfile'])->name('buyer.profile');
Route::get('/buyer/profile',[UserController::class,'create'])->name('buyer.view');
Route::post('/buyer/profile',[UserController::class,'store'])->name('buyer.store');
Route::post('/user/coverletter',[UserController::class,'coverletter'])->name('cover.letter');
Route::post('/user/resume',[UserController::class,'resume'])->name('resume');
Route::post('/buyer/avatar',[UserController::class,'avatar'])->name('avatar');
Route::get('/items/favourite',[UserController::class,'favourite'])->name('items.favourite');
Route::get('/buyer/dashboard',[UserController::class,'dashboard'])->name('buyer.dashboard');


//buyer view
Route::view('/buyer/login-register','auth.login_register_buyer')->name('buyer.login_register');

//brand-owner view
Route::view('/brand-owner/login-register','auth.login_register_brand')->name('brand_owner.login_register');
Route::post('/brand-owner/register',[BrandOwnerRegisterController::class,'brandownerRegister'])->name('brd.register');
Route::post('/applications/{id}',[ItemController::class,'apply'])->name('apply');


//save and unsave item
Route::post('/save/{id}',[FavouriteController::class,'saveItem']);
Route::post('/unsave/{id}',[FavouriteController::class,'unSaveItem']);


//search
Route::get('/items/search',[ItemController::class,'searchItems']);

