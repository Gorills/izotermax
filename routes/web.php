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

Route::get('/promyshlennaya-teploizolyaciya/truboprovodov-para-otopleniya', function () {
    return view('teploizolyaciya.truboprovodov-para-otopleniya');
});

Route::get('/promyshlennaya-teploizolyaciya/truboprovodov-i-emkostej', function () {
    return view('teploizolyaciya.truboprovodov-i-emkostej');
});
//
Route::get('/promyshlennaya-teploizolyaciya/truboprovodov-holodnoj-vody', function () {
    return view('teploizolyaciya.truboprovodov-holodnoj-vody');
});
//
Route::get('/promyshlennaya-teploizolyaciya/rezervuarov-i-emkostej', function () {
    return view('teploizolyaciya.rezervuarov-i-emkostej');
});
//
Route::get('/promyshlennaya-teploizolyaciya/vozduhovodov-i-ventilyatorov', function () {
    return view('teploizolyaciya.vozduhovodov-i-ventilyatorov');
});
//
Route::get('/promyshlennaya-teploizolyaciya/bolshih-vertikalnyh-emkostej', function () {
    return view('teploizolyaciya.bolshih-vertikalnyh-emkostej');
});
Route::get('/promyshlennaya-teploizolyaciya/teploizolyaciya-ciklonov', function () {
    return view('teploizolyaciya.teploizolyaciya-ciklonov');
});
Route::get('/promyshlennaya-teploizolyaciya/goryachih-masloprovodov', function () {
    return view('teploizolyaciya.goryachih-masloprovodov');
});
Route::get('/promyshlennaya-teploizolyaciya/gorelok-i-sushilnyh-trub', function () {
    return view('teploizolyaciya.gorelok-i-sushilnyh-trub');
});
Route::get('/promyshlennaya-teploizolyaciya/truboprovodov-otvodov-trojnikov', function () {
    return view('teploizolyaciya.truboprovodov-otvodov-trojnikov');
});
Route::get('/promyshlennaya-teploizolyaciya/teploizolyaciya-oborudovaniya', function () {
    return view('teploizolyaciya.teploizolyaciya-oborudovaniya');
});



Route::get('/izdeliya-iz-metalla', 'Metall@index');



Route::get('/kontakty', function () {
    return view('kontakty');
});
Route::get('/price', function () {
    return view('price');
});



Route::get('/sendemail', 'SendEmailController@index');

Route::post('/sendemail/send', 'SendEmailController@send');



Route::get('/izdeliya-iz-metalla/{slug}', 'MetallController@metall')->name('metall');


Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware' => ['auth']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('/stock', 'StockController', ['as'=>'admin']);
    Route::resource('/event', 'EventController', ['as'=>'admin']);
    Route::resource('/work', 'WorkController', ['as'=>'admin']);

    Route::get('/store', 'StoreController@store')->name('admin.store');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/product', 'ProductController', ['as'=>'admin']);
});



//Route::get('/works', 'WorksController@index')->name('works');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
