<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
 */

// because we've applied this web middleware group for every single requests to anyone of these routes we're going to send it through all of the middleware checks in kernel.php
// no longer needed in newer versions of laravel
// Route::group(['middleware' => ['web']], function () {

Route::get('begin', function () {
    // session flashing - good for things like 'thanks for signing up' or 'you are now signed out' since it only lasts for 1 refresh
    // Session::flash('flash_message', 'Welcome');

    // global flash function we'll make in app/helpers.php
    flash('You are now signed in!', 'success');
    // laravel global function
    return redirect('/');
});

Route::get('/construction', function () {
    return view('misc.construction');
});

Route::get('/blastingoff', function() {
    return view('blastingoff.bs_example');
});

// when the user makes a get request to the homepage
Route::get('/', function () {
    // anonymous (or closure in php)
    // then i want to trigger this function
    return view('welcome'); //view: what the end user sees
    // dont need to type out the full filename e.g. welcome.blade.php
});

// Route::get('/', 'PagesController@home'); //controller PagesController class called at /

// Route::get('about', function() {
//     return view('pages.about'); //pages.about and page/about == pages/about
// });

Route::get('people', function () {
    $people = ['Taylor', 'Matt', 'Jeffrey'];
    return view('people', compact('people')); // ['people' => $people] == compact('people')
});

//%controllerName%Controller@%methodName%
Route::get('pages', 'PagesController@home');
Route::get('about', 'PagesController@about');

Route::get('test', function () {
    return view('layout');
});

// RESTFul convention: name method of controller you're calling after the action of the request. Get request --> index since we'll get -all- the cards in the DB
Route::get('cards', 'CardsController@index');

// {varName} in laravel can be seen as passing in a variable (card) in the URI
Route::get('cards/{card}', 'CardsController@show');

// form action should be sent to a route
Route::post('cards/{card}/notes', 'NotesController@store');

// when we visit the notes with whatever id followed by edit that should load the edit action on the notes controller
Route::get('/notes/{note}/edit', 'NotesController@edit');

// patch is synonmous with update
Route::patch('notes/{note}', 'NotesController@update');
// no longer needed in newer versions of laravel
// });
