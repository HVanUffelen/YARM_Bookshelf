<?php
Route::group(['namespace'=>'Yarm\Bookshelf\Http\Controllers','prefix'=> strtolower(config('yarm.sys_name')),'middleware'=>['web']], function (){
    Route::get('/bookshelf/bookshelfForm', 'BookshelfController@bookshelfForm')
        ->name('bookshelfForm');
    Route::get('/bookshelf/bookshelfFetch', 'BookshelfController@bookshelfFetch')
        ->name('bookshelfFetch');
    Route::resource('/bookshelf', 'BookshelfController');
    Route::get('/bookshelfDelete', 'BookshelfController@destroy');
});


