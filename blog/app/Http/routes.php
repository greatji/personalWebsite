<?php
use Illuminate\Http\Request;
use DB;
date_default_timezone_set('PRC');
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

// Route::get('/username/{name?}', array( 'as' => 'home_route', function ($name = 'sunji') {
//     $view = view('home.index');
//     $view->hi = "你好";
//     $view->object = $name; 
//     return $view;
// }))->where('name', '[A-Za-z]+'); 

// Route::get('/test',function(){
// 	$url = URL::route('home_route');
// 	dd($url);
// 	return Redirect::route('home_route');
// });

//Route::get('/','Controller@index');
Route::get('/', 'Auth\AuthController@getLogin');
Route::get('/visitor', function(){
    $ip = $_SERVER["REMOTE_ADDR"];
    DB::table('visitor')->insert(['ip' => $ip, 'date' => date('Y-m-d H:m:s')]);
    return redirect('/blog/list');
});
Route::get('/resume', function(){
    return view('resume.index');
});
Route::get('/blog/list/{type?}/{current?}', 'Controller@visitor');
Route::get('/blog/visitShowAll/{title}', 'Controller@visitShowAll');
//Route::post('upload','Controller@store');

Route::post('/blog/addphoto/{id?}',  'Controller@store');
Route::get('/blog/newlist/{type?}/{current?}', [
    'middleware' => 'auth',
    'uses' => 'Controller@getBlog'
    ]);
Route::get('/blog/showAll/{title}', [
    'middleware' => 'auth',
    'uses' => 'Controller@showAll'
    ]);

Route::post('/blog/writeblog', [
    'middleware' => 'auth',
    'uses' => 'Controller@writeBlog'
    ]);
Route::get('/blog/writeblog', ['middleware' => 'auth', function(){
	return view('resume.write');
}]);
Route::post('/blog/upload', [
    'middleware' => 'auth',
    'uses' => 'Controller@upload'
    ]);
Route::get('/blog/delete/{title}', [
    'middleware' => 'auth',
    'uses' => 'Controller@delete'
    ]);
Route::get('/blog/rewrite/{title}', [
    'middleware' => 'auth',
    'uses' => 'Controller@rewrite'
    ]);
Route::get('/blog/deletelabel/{type}', [
    'middleware' => 'auth',
    'uses' => 'Controller@deletelabel'
    ]);
Route::get('/blog/addlabel', [
    'middleware' => 'auth',
    'uses' => 'Controller@addlabel'
    ]);
// Route::controllers([  
//     'auth' => 'Auth\AuthController',
//     'password' => 'Auth\PasswordController',
// ]);
Route::get('/home', ['middleware' => 'auth', function(){
	return redirect('/blog/newlist');
}]);

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/multimedia','Controller@homework');
Route::get('/download/{para}',function($para){
    $path = DB::select('select filePath from homework where id = ?', [$para]);
    //print_r($path[0]->filePath);
    return response()->download(realpath(base_path('public')).'/'.$path[0]->filePath); 
});
