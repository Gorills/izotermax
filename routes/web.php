<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/portfolio/zavod-kronospan', function () {
    return view('works.zavod-kronospan');
});
Route::get('/portfolio/talion-terra', function () {
    return view('works.talion-terra');
});
Route::get('/portfolio/pavlovskij-dok', function () {
    return view('works.pavlovskij-dok');
});
Route::get('/portfolio/hyonda-sibir', function () {
    return view('works.hyonda-sibir');
});




Route::get('/promyshlennaya-teploizolyaciya', function () {
    return view('promyshlennaya-teploizolyaciya');
});

Route::get('/promyshlennaya-teploizolyaciya/teploizolyaciya-oborudovaniya-i-pomeshchenij', function () {
    return view('teploizolyaciya-oborudovaniya-i-pomeshchenij');
});

Route::get('/promyshlennaya-teploizolyaciya/teploizolyaciya-truboprovodov', function () {
    return view('teploizolyaciya-truboprovodov');
});



Route::get('/izdeliya-iz-metalla', function () {
    return view('izdeliya-iz-metalla');
});
Route::get('/izdeliya-iz-metalla/dobornye-ehlementy', function () {
    return view('dobornye-ehlementy');
});
Route::get('/izdeliya-iz-metalla/vodostochnye-sistemy', function () {
    return view('vodostochnye-sistemy');
});
Route::get('/izdeliya-iz-metalla/otlivy', function () {
    return view('otlivy');
});
Route::get('/izdeliya-iz-metalla/otkosy', function () {
    return view('otkosy');
});
Route::get('/izdeliya-iz-metalla/ventilyacionnye-kolpaki', function () {
    return view('ventilyacionnye-kolpaki');
});
Route::get('/izdeliya-iz-metalla/kolpaki-na-zabory', function () {
    return view('kolpaki-na-zabory');
});
Route::get('/izdeliya-iz-metalla/vozduhovody', function () {
    return view('vozduhovody');
});
Route::get('/izdeliya-iz-metalla/ventilyaciya', function () {
    return view('ventilyaciya');
});


Route::get('/kontakty', function () {
    return view('kontakty');
});



Route::get('/sendemail', 'SendEmailController@index');

Route::post('/sendemail/send', 'SendEmailController@send');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
