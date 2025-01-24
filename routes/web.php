<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/dashboard-list', function () {
    return view('dashboard.list');
});

Route::get('/dashboard-view', function () {
    return view('dashboard.view');
});


Route::get('/login', function () {
    return view('login');
});

// Admission Enquiry From
Route::post('/admission-enquiry', function (Request $request) {
    return back()->with('success', 'Enquiry submitted successfully!');
})->name('admission.enquiry');

Route::group(array('namespace' => 'App\Http\Controllers'), function () {
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
    Route::get('it', array('as' => 'it',  'uses' => 'WebsiteController@it'));
    Route::get('mech', array('as' => 'mech',  'uses' => 'WebsiteController@mech'));
    Route::get('ai&ds', array('as' => 'ai&ds',  'uses' => 'WebsiteController@aids'));
    Route::get('agri', array('as' => 'agri',  'uses' => 'WebsiteController@agri'));
    Route::get('bioMedical', array('as' => 'bioMedical',  'uses' => 'WebsiteController@bioMedical'));
    Route::get('foodTech', array('as' => 'foodTech',  'uses' => 'WebsiteController@foodTech'));
    Route::get('bioTech', array('as' => 'bioTech',  'uses' => 'WebsiteController@bioTech'));
    Route::get('cyberSecurity', array('as' => 'cyberSecurity',  'uses' => 'WebsiteController@cyberSecurity'));
    Route::get('ai&ml', array('as' => 'ai&ml',  'uses' => 'WebsiteController@aiml'));

    // Departments/Pg
    Route::get('mba', array('as' => 'mba',  'uses' => 'WebsiteController@mba'));
    Route::get('mca', array('as' => 'mca',  'uses' => 'WebsiteController@mca'));
    Route::get('environmentalEngineering', array('as' => 'environmentalEngineering',  'uses' => 'WebsiteController@environmentalEngineering'));
    Route::get('cse', array('as' => 'cse',  'uses' => 'WebsiteController@meCse'));
    Route::get('ece', array('as' => 'ece',  'uses' => 'WebsiteController@meEce'));
    Route::get('ped', array('as' => 'ped',  'uses' => 'WebsiteController@ped'));
    Route::get('manufacturingEngineering', array('as' => 'manufacturingEngineering',  'uses' => 'WebsiteController@manufacturingEngineering'));
});
