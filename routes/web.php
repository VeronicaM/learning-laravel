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
Route::group(['prefix' => 'main'], function(){
    Route::get('/', function () {
        return view('blog.index');
    })->name('blog.index');
    
    Route::get('post/{id}', function ($id) {
        if($id == 1){
            $post = ['title' => 'Learning Laravel', 'content' => 'This blog post will get you right on track with Laravel'];
        }else{
            $post = ['title' => 'Something else', 'content' => 'Some other content'];
        }
        return view('blog.post', ['post' => $post]);
    })->name('blog.post');
});

