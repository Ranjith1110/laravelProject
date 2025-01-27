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
    Route::get('courses', array('as' => 'courses',  'uses' => 'WebsiteController@courses'));
    Route::get('placement', array('as' => 'placement',  'uses' => 'WebsiteController@placement'));
    Route::get('contact', array('as' => 'contact',  'uses' => 'WebsiteController@contact'));

    // Departments/Ug
    Route::get('civil-engineering', array('as' => 'civil',  'uses' => 'WebsiteController@civil'));
    Route::get('computer-science-engineering', array('as' => 'cse',  'uses' => 'WebsiteController@cse'));
    Route::get('electrical-electronics-engineering', array('as' => 'eee',  'uses' => 'WebsiteController@eee'));
    Route::get('electronics-communication-engineering', array('as' => 'ece',  'uses' => 'WebsiteController@ece'));
    Route::get('electronics-instrumentation-engineering', array('as' => 'eie',  'uses' => 'WebsiteController@eie'));
    Route::get('information-technology', array('as' => 'it',  'uses' => 'WebsiteController@it'));
    Route::get('mechanical-engineering', array('as' => 'mech',  'uses' => 'WebsiteController@mech'));
    Route::get('artificial-intelligence-and-data-ccience', array('as' => 'ai&ds',  'uses' => 'WebsiteController@aids'));
    Route::get('agricultural-engineering', array('as' => 'agri',  'uses' => 'WebsiteController@agri'));
    Route::get('bio-medical-engineering', array('as' => 'bioMedical',  'uses' => 'WebsiteController@bioMedical'));
    Route::get('food-technology', array('as' => 'foodTech',  'uses' => 'WebsiteController@foodTech'));
    Route::get('bio-technology', array('as' => 'bioTech',  'uses' => 'WebsiteController@bioTech'));
    Route::get('cyber-security', array('as' => 'cyberSecurity',  'uses' => 'WebsiteController@cyberSecurity'));
    Route::get('artificial-intelligence-and-machine-learning', array('as' => 'ai&ml',  'uses' => 'WebsiteController@aiml'));

    // Departments/Pg
    Route::get('pg/master-of-business-administration', array('as' => 'mba',  'uses' => 'WebsiteController@mba'));
    Route::get('pg/master-of-computer-applications', array('as' => 'mca',  'uses' => 'WebsiteController@mca'));
    Route::get('pg/environmental-engineering', array('as' => 'environmentalEngineering',  'uses' => 'WebsiteController@environmentalEngineering'));
    Route::get('pg/computer-science-engineering', array('as' => 'mecse',  'uses' => 'WebsiteController@meCse'));
    Route::get('pg/electronics-communication-engineering', array('as' => 'meece',  'uses' => 'WebsiteController@meEce'));
    Route::get('pg/power-electronics-and-drives', array('as' => 'ped',  'uses' => 'WebsiteController@ped'));
    Route::get('pg/manufacturing-engineering', array('as' => 'manufacturingEngineering',  'uses' => 'WebsiteController@manufacturingEngineering'));
});
