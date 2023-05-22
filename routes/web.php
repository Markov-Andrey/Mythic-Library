<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatGPTController;
use App\Http\Controllers\WorldController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/chatgpt', [ChatGPTController::class, 'index'])
    ->name('chatgpt');

Route::get('/', [WorldController::class, 'index'])
    ->name('welcome');

Route::get('/{world_name_slug}', [WorldController::class, 'world'])
    ->name('world');
