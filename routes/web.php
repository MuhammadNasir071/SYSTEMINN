<?php

use App\Http\Controllers\frontend\FrontendController;
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


Route::group(['prefix' => 'systeminn'], function()
{
    Route::group(['as' => 'systeminn.'], function()
    {
        Route::get('/', [FrontendController::class, 'index'])->name('index');
        Route::get('/about', [FrontendController::class, 'about'])->name('about');
        Route::get('/sevices', [FrontendController::class, 'services'])->name('services');
        Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
    });
});
