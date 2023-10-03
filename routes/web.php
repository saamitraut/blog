<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// routes for regions.
Route::group(array('prefix' => 'regions'), function() {
    Route::get('/', 'regionsController@index');
    Route::get('/add-regions', 'regionsController@add');
    Route::post('/add-regions-post', 'regionsController@addPost');
    Route::get('/delete-regions/{id}', 'regionsController@delete');
    Route::get('/edit-regions/{id}', 'regionsController@edit');
    Route::post('/edit-regions-post', 'regionsController@editPost');
    Route::get('/change-status-regions/{id}', 'regionsController@changeStatus');
    Route::get('/view-regions/{id}', 'regionsController@view');
});
// end of regions routes
// Lecture 42
Route::get('/insert', function(){
    $parameters = [
        'title' => 'PHP with Laravel',
        'content' => 'Laravel is the best thing that has happened to PHP',
    ];
    DB::insert("insert into votes(title, content) values (:title, :content)", $parameters);
});

  Route::get('/read', function() {
    $votes = DB::select("select * from votes where id=1");

    foreach ($votes as $vote) {
        return $vote->title;
    } 
	//return $votes;
}); 
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for flights.
Route::group(array('prefix' => 'flights'), function() {
    Route::get('/', 'flightsController@index');
    Route::get('/add-flights', 'flightsController@add');
    Route::post('/add-flights-post', 'flightsController@addPost');
    Route::get('/delete-flights/{id}', 'flightsController@delete');
    Route::get('/edit-flights/{id}', 'flightsController@edit');
    Route::post('/edit-flights-post', 'flightsController@editPost');
    Route::get('/change-status-flights/{id}', 'flightsController@changeStatus');
    Route::get('/view-flights/{id}', 'flightsController@view');
});
// end of flights routes
// routes for users.
Route::group(array('prefix' => 'users'), function() {
    Route::get('/', 'usersController@index');
    Route::get('/add-users', 'usersController@add');
    Route::post('/add-users-post', 'usersController@addPost');
    Route::get('/delete-users/{id}', 'usersController@delete');
    Route::get('/edit-users/{id}', 'usersController@edit');
    Route::post('/edit-users-post', 'usersController@editPost');
    Route::get('/change-status-users/{id}', 'usersController@changeStatus');
    Route::get('/view-users/{id}', 'usersController@view');
});
// end of users routes
// routes for flight_reviews.
Route::group(array('prefix' => 'flight_reviews'), function() {
    Route::get('/', 'FlightReviewsController@index');
    Route::get('/add-flight_reviews', 'FlightReviewsController@add');
    Route::post('/add-flight_reviews-post', 'FlightReviewsController@addPost');
    Route::get('/delete-flight_reviews/{id}', 'FlightReviewsController@delete');
    Route::get('/edit-flight_reviews/{id}', 'FlightReviewsController@edit');
    Route::post('/edit-flight_reviews-post', 'FlightReviewsController@editPost');
    Route::get('/change-status-flight_reviews/{id}', 'FlightReviewsController@changeStatus');
    Route::get('/view-flight_reviews/{id}', 'FlightReviewsController@view');
});
// end of flight_reviews routes
