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

use App\city;
use App\country;
use App\image;
use App\product;
use App\role;
use App\state;
use App\tag;
use App\User;

Route::get('role-test', function () {

    $role =role::find(3);
    return $role->users;
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('users', function () {
    return user::paginate(50);
});
Route::get('products', function () {
    return product::with(['image'])->paginate(100);
});
Route::get('images', function () {
    return image::paginate(100);
});
// route::get('units-test','DataImportController@importUnites');
Route::get('states', function () {
    return state::with(['cities','country'])->paginate(50);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('test-email', function () {
    return 'hello';
})->middleware(['auth','user_is_admin']); 