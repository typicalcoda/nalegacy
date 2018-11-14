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
    if(Auth::check())
    	return redirect("/home");
    return redirect("/login");
});

Route::group(["middleware" => "guest"], function() {


	Route::get('/login', function(){
		return view("login");
	});

	Route::post('/login', function(){
		$email = request()->email;
		$password = request()->password;

		if(Auth::attempt(["email"=>$email,"password"=>$password]))
			return redirect("/home");

		return view('login')->with(["error" => "Incorrect credentials"]);
	});

});

Route::group(["middleware" => "auth"], function() {



});
