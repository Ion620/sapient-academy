<?php

use App\Http\Controllers\Library\ReadersController;
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
Route::group(['prefix' => 'reader'], function (){
    Route::get('/', [ReadersController::class , 'index'])->name('index');
    Route::get('/{id}/{reader_id}', [ReadersController::class, 'show'])->name('show');
    Route::get('/{id}/{reader_id}/edit', [ReadersController::class, 'edit'])->name('edit');
    Route::post('/{id}/{reader_id}', [ReadersController::class, 'update'])->name('update');
});
