<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/','HomeController@index'); 

Route::get('/', [ HomeController::class, 'index']); //Chamando HomeController v8.0+