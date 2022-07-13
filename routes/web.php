<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandOwnerRegisterController;

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
Auth::routes();
Route::get('/', [ItemController::class,'index']);

//items
Route::get('/items/{id}/edit',[ItemController::class,'edit'])->name('items.edit');
Route::post('/items/{id}/edit',[ItemController::class,'update'])->name('items.update');
Route::get('/items/create', [ItemController::class,'create'])->name('items.create');
Route::post('/items/create', [ItemController::class,'store'])->name('items.store');
Route::get('/items/{id}/{item}',[ItemController::class,'show'])->name('items.show');
Route::get('/items/my-items',[ItemController::class,'myitems'])->name('items.myitems');
Route::get('items/applications',[ItemController::class,'applicant'])->name('items.applicants');



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


Route::get('/users',function(){
    return view('home');

});
Route::get('brand', [BrandController::class, 'index']);
Route::get('item', [ItemController::class, 'index']);



