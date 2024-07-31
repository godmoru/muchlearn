<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('fend.index');
    // return view('welcome');
})->name('index');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('about-us', [PagesController::class, 'aboutus'])->name('about-us');
Route::get('contact-us', [PagesController::class, 'contactus'])->name('contact-us');
Route::get('courses', [PagesController::class, 'courses'])->name('courses'); // Remember to move to courses controller
Route::get('courses/show/{id?}', [PagesController::class, 'showCourse'])->name('course.show');
Route::get('instructors', [PagesController::class, 'instructors'])->name('instructors.all');
Route::get('testimonials', [PagesController::class, 'testimonials'])->name('testimonials.all');
Route::get('news-update', [PagesController::class, 'newsBlog'])->name('news.blog'); //Remember to move to newsupdate controller
Route::get('news-update/details/{id?}', [PagesController::class, 'newsBlogShow'])->name('news.blog.show'); //Remember to move to newsupdate controller
Route::get('course/categories', [PagesController::class, 'courseCategory'])->name('course.categories'); //Remember to move to course controller

Route::get('backend-layout', function(){
    return view('bend.dashboard-test');
})->name('backend-base');

Route::get('auth-layout', function(){
    return view('layouts.authbase');
})->name('auth-laout');