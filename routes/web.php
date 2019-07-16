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

// Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('login', '\App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');

Route::group(['middleware' => ['auth', 'is.admin']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', function () {
            return view('backend.pages.dashboard');
        });

        //Category
        Route::get('category', 'BackEnd\Categories\CategoryController@getIndex');
        Route::get('category/create', 'BackEnd\Categories\CreateCategoryController@getFormCategory');
        Route::post('category/create', 'BackEnd\Categories\CreateCategoryController@createCategory');
        Route::get('category/edit/{category}', 'BackEnd\Categories\EditCategoryController@getFormCategory')->name('category.edit');
        Route::post('category/edit/{category}', 'BackEnd\Categories\EditCategoryController@editCategory');
        Route::delete('category/edit/{category}', 'BackEnd\Categories\EditCategoryController@editCategory')->name('category.delete');

        //Book
        Route::get('book', 'BackEnd\Books\BookController@getIndex');
        Route::get('book/create', 'BackEnd\Books\CreateBookController@getFormBook');
        Route::post('book/create', 'BackEnd\Books\CreateBookController@createBook');
        Route::get('book/edit/{book}', 'BackEnd\Books\EditBookController@getFormEditBook')->name('book.edit');
        Route::post('book/edit/{book}', 'BackEnd\Books\EditBookController@editBook');
        Route::delete('book/delete/{book}', 'BackEnd\Books\DeleteBookController@deleteBook')->name('book.delete');

        //User
        Route::get('user', 'BackEnd\Users\UserController@getIndex');
    });
});

Route::get('/books', 'FrontEnd\Books\BookController@getBook');

Route::get('/', 'FrontEnd\HomePage\HomeController@getIndex');
// Route::get('/login', 'FrontEnd\HomePage\HomeController@getIndex');
