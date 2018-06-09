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

/**
 * Authentication.
 */
Auth::routes();

/**
 * Home.
 */
Route::get('/', 'HomeController@index')->name('home');

/**
 * Dashboard.
 */
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

/**
 * Accounts.
 */
Route::get('/accounts', 'AccountsController@index')->name('accounts');

/**
 * Users.
 */
Route::get('/users', 'UsersController@index')->name('users');
Route::get('/users/create', 'UsersController@create')->name('users.create');
Route::post('/users/store', 'UsersController@store')->name('users.store');
Route::get('/users/{user}', 'UsersController@show')->name('users.show');
Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');

/**
 * Projects.
 */
Route::get('/projects', 'ProjectsController@index')->name('projects');
Route::get('/projects/create', 'ProjectsController@create')->name('projects.create');
Route::post('/projects/store', 'ProjectsController@store')->name('projects.store');
Route::get('/projects/{project}', 'ProjectsController@show')->name('projects.show');
Route::patch('/projects/{project}', 'ProjectsController@update')->name('projects.update');
Route::get('/projects/{project}/edit', 'ProjectsController@edit')->name('projects.edit');
Route::get('/projects/{project}/select', 'ProjectsController@select')->name('projects.select');
