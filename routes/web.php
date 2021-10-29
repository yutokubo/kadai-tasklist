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

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController');

//urlとactionのルーティング

//メッセージの個別表示
// Route::get('tasks/{id}', 'TasksController@show');
// // メッセージの登録処理
// Route::post('tasks', 'TasksController@store');
// // メッセージの更新処理
// Route::put('tasks/{id}', 'TasksController@update');
// // メッセージを削除
// Route::delete('tasks/{id}', 'TasksController@destroy');

// // index補助ページ
// Route::get('tasks', 'TasksController@index');->name('tasks.index');
// // create: 新規作成用のフォームページ
// Route::get('tasks/create', 'TasksController@create');->name('tasks.create');
// // edit: 更新用のフォームページ
// Route::get('tasks/{id}/edit', 'TasksController@edit')->name('tasks.edit');
