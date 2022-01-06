<?php

use Illuminate\Support\Facades\Route;

Route::get('add/{a}/{b}', 'bash\bashpackage\TestPackageController@add');
Route::get('subtract/{a}/{b}', 'bash\bashpackage\TestPackageController@subtract');