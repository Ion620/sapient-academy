<?php

use App\Http\Controllers\TaskController;
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

Route::group(['prefix' => 'task'], function (){
    Route::get('/', [TaskController::class, 'index'])->name('index');
    Route::post('/', [TaskController::class, 'store'])->name('store');
    Route::delete('/{key}', [TaskController::class, 'delete'])->name('delete');
    Route::post('/{key}/done', [TaskController::class, 'done'])->name('done');
    Route::post('/{key}/not-done', [TaskController::class, 'notDone'])->name('notDone');
    Route::post('/invalidate', [TaskController::class , 'invalidate'])->name('invalidate');
});

