<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () { return view('index'); })->name('index');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/requirement', function () { return view('requirement'); })->name('requirement');
Route::get('/specialisasion', function () { return view('specialisasion'); })->name('specialisasion');
Route::get('/submit', function () { return view('submit'); })->name('submit');
Route::get('/contact', function () { return view('contact'); })->name('contact');

//Contacts / feedback form
Route::post('/contact_us', [ContactUsController::class, 'store'])->name('ContactUs_store');

//Route::get('/test', function () {
//    Mail::to('matesglobal.it@gmail.com')->send(new \App\Mail\MailThankYouForYourEnquiry(["email" => "fosdfo@gmail.com",
//    "name" => "fosdf dfdo",
//    "message" => "fosdf dfdo",
//    "phone" => "123654987",
//    "ip" => "197.0.0.1",]));
//});
