<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layouts/master');
});


Route::get('/practice', function () {
    $faker= Faker\Factory::create();
    echo $faker->name;
    echo "<br>";
    echo $faker->address;
    echo "<br>";
    $generator = new Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs(5);
    echo implode('<p>', $paragraphs);
});

Route::get('/randomuser', function() {
    return view('randomuser');
});

Route::get('/loremipsum', function() {
    return view('loremipsum');
});

Route::get('/lorem','LoremController@getLorem');
Route::post('/lorem','LoremController@postLorem');

Route::get('/randuser','RanduserController@getRanduser');
Route::post('/randuser','RanduserController@postRanduser');