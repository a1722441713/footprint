<?php

Route::middleware('record_visitor')->group(function () {

    Route::get('/', 'IndexController@index')->name('index');

    Route::get('/categories/{slug}', 'CategoriesController@show')->name('category.show');

    Route::get('/posts/{slug}', 'PostsController@show')->name('post.show');
});


    Route::group(['middleware' =>'frontend_web'],function (){
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register')->name('register');
        Route::get('login','Auth\LoginController@showLoginForm')->name('login');
        Route::post('login','Auth\LoginController@login')->name('login');
    });
    Route::get('logout',function (){
        Auth::guard('frontend_web')->logout();
                return redirect('');
            });

    Route::post('post/{post_id}/Comments/store','CommentController@store')->name('comment.store');

    Route::post('search', 'PostsController@search')->name('search');

    Route::get('email/verify/{token}', 'EmailController@verify')->name('email.verify');

