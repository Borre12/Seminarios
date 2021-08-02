<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\instructor\courseController;
//Url
Route::redirect('', 'instructor/courses');

//Rutas

Route::resource('courses', CourseController::class)->names('courses');
