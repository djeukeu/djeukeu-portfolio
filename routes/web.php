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
    Route::view('/example', 'projects.example');
    Route::view('/mobile-app-ci-cd-using-fastlane-and-github-actions', 'projects.mobile_ci_cd');
    Route::view('/agogochop', 'projects.agogochop');
    Route::view('/camxi', 'projects.camxi');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send_message'])->name('contact.send');
