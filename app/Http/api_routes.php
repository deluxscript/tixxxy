<?php

/**
 * OAuth
 */

//Get access_token
Route::post('/oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});

/**
 * Api
 */
$api = app('Dingo\Api\Routing\Router');

//Show user info via restful service.
$api->version('v1', ['namespace' => 'App\Http\Controllers', 'middleware' => 'cors'], function ($api) {
    $api->get('users', 'UsersController@index');
    $api->get('users/{id}', 'UsersController@show');
});

//Show Attendee info.
$api->version('v1', ['namespace' => 'App\Http\Controllers\API', 'middleware' => 'cors'], function ($api) {
    $api->get('attendees', 'AttendeesApiController@index');
    $api->get('attendees/{id}', 'AttendeesApiController@show');
    $api->post('attendees/{id}', 'AttendeesApiController@update');
});

//Show Event info.
$api->version('v1', ['namespace' => 'App\Http\Controllers\API', 'middleware' => 'cors'], function ($api) {
    $api->get('event', 'EventsApiController@index');
    $api->get('event/{id}', 'EventsApiController@show');
});

//Show Order info.
$api->version('v1', ['namespace' => 'App\Http\Controllers\API', 'middleware' => 'cors'], function ($api) {
    $api->get('order', 'OrdersApiController@index');
    $api->get('order/{id}', 'OrdersApiController@show');
});



 Route::group(['prefix' => 'api', 'middleware' => 'auth:api'], function () {
   

//     /*
//      * ---------------
//      * Organisers
//      * ---------------
//      */



//     /*
//      * ---------------
//      * Events
//      * ---------------
//      */
//     Route::resource('events', 'API\EventsApiController');


//     /*
//      * ---------------
//      * Attendees
//      * ---------------
//      */
//     Route::resource('attendees', 'API\AttendeesApiController');


//     /*
//      * ---------------
//      * Orders
//      * ---------------
//      */

//     /*
//      * ---------------
//      * Users
//      * ---------------
//      */

//     /*
//      * ---------------
//      * Check-In / Check-Out
//      * ---------------
//      */


    Route::get('/', function () {
        return response()->json([
            'Hello' => Auth::guard('api')->user()->full_name . '!'
        ]);
    });


 });