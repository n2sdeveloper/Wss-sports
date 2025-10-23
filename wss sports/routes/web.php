<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/our-family', function () {
    return view('our-family');
});


Route::get('/programs-academies', function () {
    return view('programs');
});


Route::get('/affiliation', function () {
    return view('affiliationprogram');
});


Route::get('/social-commitment', function () {
    return view('socialcommitment');
});

 Route::get('/contact-us', function () {
     return view('contact-us');
 });

  Route::get('/news-achievements', function () {
     return view('news-achivment');
 });



Route::post('/contact-us' , [ContactController::class , 'submit'])->name('contact.submit');
