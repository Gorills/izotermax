<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/otdelka-polov', function () {
    return view('otdelka-polov');
});
Route::get('/otdelka-sten', function () {
    return view('otdelka-sten');
});
Route::get('/otdelka-potolka', function () {
    return view('otdelka-potolka');
});
Route::get('/otdelka-balkonov', function () {
    return view('otdelka-balkonov');
});
Route::get('/remont-ofisov', function () {
    return view('remont-ofisov');
});
Route::get('/otdelka-sanuzlov', function () {
    return view('otdelka-sanuzlov');
});

Route::get('/remont-kvartir', function () {
    return view('pages');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/kontakty', function () {
    return view('kontakty');
});



Route::get('/sendemail', 'SendEmailController@index');

Route::post('/sendemail/send', 'SendEmailController@send');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
