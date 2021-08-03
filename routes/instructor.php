<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\instructor\courseController;
use App\Http\Livewire\Instructor\CoursesCurriculum;

//Url
Route::redirect('', 'instructor/courses');

//Rutas

Route::resource('courses', CourseController::class)->names('courses');

Route::get('courses/{course}/curriculum', CoursesCurriculum::class)->name('courses.curriculum');
