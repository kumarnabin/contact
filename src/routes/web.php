<?php
Route::group(['namespace' => 'Stsewa\Contact', 'middleware' => ['web']], function(){
    Route::get('contact', 'ContactController@index');
    Route::post('contact', 'ContactController@sendMail')->name('contact');
});
