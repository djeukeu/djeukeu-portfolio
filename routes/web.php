<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'home');

Route::prefix('projects')->group(function () {
    Route::view('/', 'projects');
    Route::view('/camxi', 'projects.camxi');
    Route::view('/patricias', 'projects.patricias');
    Route::view('/mobile-ci-cd', 'projects.mobile-ci-cd');
    Route::view('/web-ci-cd', 'projects.web-ci-cd');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send_message'])->name('contact.send');
