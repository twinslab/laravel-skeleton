<?php

/* Home */
Route::get('/', 'PagesController@home')->name('home');

/* About */
Route::get('about', 'PagesController@about')->name('about');

/* Contact */
Route::get('contact', 'PagesController@contact')->name('contact');
Route::post('contact', 'PagesController@postContact');
