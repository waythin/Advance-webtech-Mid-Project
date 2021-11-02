<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeekerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;


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

//sign up
Route::get('/signup',[SeekerController::class, 'signup'])->name('signup');
Route::post('/signup',[SeekerController::class, 'signupS'])->name('signup');

//seeker  
Route::get('/seeker/profile',[SeekerController::class, 'profile'])->name('profile')->middleware('SeekerAuth');
Route::get('/seeker/profile/edit/{id}/{username}',[SeekerController::class, 'edit_profile'])->name('seekeredit')->middleware('SeekerAuth');
Route::post('/seeker/profile/edit',[SeekerController::class, 'edit_profileS'])->name('seekeredit')->middleware('SeekerAuth');

//picture
Route::post('upload-image', [SeekerController::class, 'change_picture'])->name('image');

// job list
Route::get('/joblist',[PostController::class, 'job_list'])->name('joblist');

//job details
Route::get('/seeker/job_details/{id}/{title}',[PostController::class, 'job_details'])->middleware('SeekerAuth');

//apply
 Route::post('/seeker/job_details/applyjob',[PostController::class, 'apply_job'])->name('applyJob')->middleware('SeekerAuth');
 Route::get('/seeker/job_details/applied_job_list',[PostController::class, 'applied_job_list'])->name('applied_job_list')->middleware('SeekerAuth');

 //Cancel Application
 Route::get('/seeker/cancelapp/{id}/{title}',[PostController::class, 'cancel_application']);

 //login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginCSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');