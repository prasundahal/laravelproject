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

Route::resource('darys', 'daryController');
Route::resource('particulars', 'particularController');
Route::get('particular/{supplier_id}','particularController@create')->name('particulars.create');

Route::resource('supliers', 'suplierController');
Route::get('suplier/part','suplierController@part')->name('supliers.part');
Route::POST('part/store','partController@store')->name('part.store');
Auth::routes();
Route::POST('suplier/store','suplierController@store')->name('suplier.store');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin', 'Admin\AdminController@index');
Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::resource('admin/pages', 'Admin\PagesController');
Route::resource('admin/activitylogs', 'Admin\ActivityLogsController')->only([
    'index', 'show', 'destroy'
]);
Route::resource('admin/settings', 'Admin\SettingsController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

Route::resource('apple', 'appleController');
Route::resource('box', 'boxController');
Route::get('/productAjax', 'productAjaxController@index');

Route::post('/productAjax/action', 'productAjaxController@action')->name('ajaxupload.action');
Route::get('image-gallery', 'ImageGalleryController@index');

Route::post('image-gallery', 'ImageGalleryController@upload');

Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');


