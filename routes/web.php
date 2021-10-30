<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeekerController;
use App\Http\Controllers\LoginController;
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

Route::get('/' , [SeekerController::class, 'dashboard'])->name('dashboard');

Route::get('/signup',[SeekerController::class, 'signup'])->name('signup');
Route::post('/signup',[SeekerController::class, 'signupS'])->name('signup');


Route::get('/seeker/dashboard',[SeekerController::class,'seeker_dash'])->name('sdash')->middleware('SeekerAuth');
Route::get('/seeker/profile',[SeekerController::class, 'profile'])->name('profile')->middleware('SeekerAuth');


Route::get('/seeker/profile/edit/{id}/{username}',[SeekerController::class, 'edit_profile'])->name('seekeredit');
Route::post('/seeker/profile/edit',[SeekerController::class, 'edit_profileS'])->name('seekeredit');


//login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginCSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');