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

Route::get('/', function ()
{
	$news_threads = \App\Forum::where('forum_id', 4)->first()->topics()->take(3)->get();
	
    return view('home',
    [
	    'active_tab' => 'home',
        'news_threads' => $news_threads
    ]);
});

Route::get('/about', function ()
{
	return view('about',
	[
		'active_tab' => 'about'
	]);
});

Route::get('/parse', function ()
{
	//$Parser = new \App\NewsParser();
	
	$source = \App\NewsSource::Where('game', 'ARMA3')->first();
	$source->Parse();
});

Route::get('/calendar', function ()
{
	return view('calendar',
		[
			'active_tab' => 'about'
		]
	);
});

Route::any('/calendar/events', 'EventController@GetAll')
     ->name('GetAllEvents');

Route::any('/calendar/event/{event}', 'EventController@Get')
     ->where('event', '[0-9]+')
     ->name('GetEvent');

Route::post('/calendar/event/{event}/save', 'EventController@Update')
     ->where('event', '[0-9]+')
     ->name('SaveEvent');

//Route::get('/forum', function ()
//{
//	return view('forum');
//});
