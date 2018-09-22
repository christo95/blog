<?php
Route::get('test', function(){
	$user = new App\User;
	$user->name = 'dSDadasdad';
	$user->email = 'Dasdasdasd@grupoweb.com.mx';
	// $user->password = 'developer';
	$user->password = bcrypt('developer');
	// $user->role_id = 2;
	$user->save();

	return $user;
});

Route::get('roles', function(){
	return App\Role::with('user')->get();
});




Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('/home', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('saludos/{tNombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludos'])->where('tNombre',"[A-Za-z]+");

Route::resource('mensajes','MessagesController');
Route::resource('usuarios','UsersController');

Route::get('login', ['as' => 'login' , 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');

