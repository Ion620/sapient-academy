<?php

use App\Http\Controllers\LessonFive\LessonFiveController;
use App\Http\Controllers\lessonFive\ValidatorController;
use App\Http\Controllers\lessonThree\LessonThreeController;
use App\Http\Controllers\lessonThree\ResourceController;
use App\Http\Controllers\Users\UsersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/lesson3'], function (){
    Route::resource('/book',ResourceController::class)->name('store','lesson.book.store');
    Route::group(['prefix' => '/users'], function (){
        Route::get('/{id}', [LessonThreeController::class, 'index'])->name('lesson.index');
        Route::post('/{id}', [LessonThreeController::class, 'store'])->name('lesson.store');
    });
});

Route::group(['prefix' => '/lesson4/users'], function (){
    Route::get('/', [UsersController::class, 'index'])->name('users.index');
    Route::get('/{id}', [UsersController::class, 'show'])->name('users.show');
});
