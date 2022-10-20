<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/list-student', [SchoolController::class, "listStudent"]);