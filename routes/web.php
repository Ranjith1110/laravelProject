<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/popup-form', function () {
    return view('includes.popup');
});

Route::group(array('namespace'=>'App\Http\Controllers'), function(){
    Route::get('/', array('as' => 'index',  'uses' => 'WebsiteController@index'));
    Route::get('about-mamce', array('as' => 'aboutMamce',  'uses' => 'WebsiteController@aboutMamce'));	
    Route::get('history-mamce', array('as' => 'historyMamce',  'uses' => 'WebsiteController@historyMamce'));
    Route::get('admin-mamce', array('as' => 'adminMamce',  'uses' => 'WebsiteController@adminMamce'));
    Route::get('campus', array('as' => 'campus',  'uses' => 'WebsiteController@campus'));
    Route::get('placement', array('as' => 'placement',  'uses' => 'WebsiteController@placement'));
    Route::get('contact', array('as' => 'contact',  'uses' => 'WebsiteController@contact'));
});

