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

    // Departments/Ug
    Route::get('civil', array('as' => 'civil',  'uses' => 'WebsiteController@civil'));
    Route::get('cse', array('as' => 'cse',  'uses' => 'WebsiteController@cse'));
    Route::get('eee', array('as' => 'eee',  'uses' => 'WebsiteController@eee'));
    Route::get('ece', array('as' => 'ece',  'uses' => 'WebsiteController@ece'));
    Route::get('eie', array('as' => 'eie',  'uses' => 'WebsiteController@eie'));
});

