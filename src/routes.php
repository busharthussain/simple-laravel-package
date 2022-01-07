<?php

use Illuminate\Support\Facades\Route;

Route::get('add/{a}/{b}', 'kiswatech\kiswapackage\TestPackageController@add');
Route::get('subtract/{a}/{b}', 'kiswatech\kiswapackage\TestPackageController@subtract');