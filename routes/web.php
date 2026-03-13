<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/test', function () {
    return 'bagdad';
});

//2
Route::get('/dir/test', function () {
    return '111';
});

//3
Route::get('/user1/{name}', function ($name) {
    return 'ЮЗЕР'.$name;
});

//4
Route::get('/user2/{surname}/{name}', function ($surname, $name) {
    return $surname.' '.$name;
});

//5
Route::get('/city/{city?}', function ($city = 'omsk') {
    return $city;
});

//6
Route::get('/userid/{id}', function ($id) {
    return $id;
})->where('id', '[0-9]+');

//7
Route::get('/userid/{id}/{name}', function ($id, $name) {
    return $id.' '.$name;
})->where('id', '[0-9]+')->where('name', '[a-z]{2,}');

//8
Route::get('/posts/{date}', function ($date) {
    return $date;
})->where('date', '\d{4}-(0[0-9]|1[0-2])-(0[1-])');

//9
Route::get('/posts/{year}/{month}/{day}', function ($year, $month, $day) {
    return $year.'.'.$month.'.'.$day;
})->where('year', '\d{4}+')->where('month', '\d{2}+')->where('day', '\d{2}+');

//10
Route::get('/users/{order}', function ($order) {
    return 'order..'.$order;
})->whereIn('order', ['name','surname','age']);

//11
Route::get('/cityname/{name}', function ($name) {
    return 'city..'.$name;
})->whereAlpha('name');

//12
Route::get('/globalname/{name}', function ($name) {
    return 'globalname..'.$name;
});

/* //konflikti 13
Route::get('/user/all', function () {
	return 'faall';
});
Route::get('/user/{id}', function ($id) {
	return 'aidi'.$id;
}); */

//14
/* Route::get('/user', function () {
	return 'user';
});
Route::get('/user/all', function () {
	return 'all';
});
Route::get('/user/{id?}', function ($id = null) {
	return 'id';
}); */

//15
/* Route::get('/user/{id}', function ($id) {
	return 'id'.$id;
})->where('id', '[0-9]+');

Route::get('/user/slug/{id}', function ($id) {
	return 'slugid';
})->where('slug', '[a-z0-9_-]+'); */

//16
Route::get('/admin/user/{id}', function ($id) {
	return 'id'.' '.$id;
});
Route::get('/admin/users', function ($id) {
	return 'all';
});

Route::get('/user', ['App\\Http\\Controllers\\UserController', 'show']);
Route::get('/ally', [UserController::class, 'all']);

Route::get('/user/{name}', [UserController::class, 'username']);
Route::get('/user/{surname}/{name}', [UserController::class, 'surnameUser']);

Route::get('/userCity/{user}', [UserController::class, 'userCity']);

Route::get('/fafa', [UserController::class, 'showtest']);