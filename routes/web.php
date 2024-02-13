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

Route::view('/about', 'about');

Route::view('/resume', 'resume');


Route::prefix('projects')->group(function () {
    Route::view('/', 'projects');
    Route::view('/ekoh-mobile', 'ekoh-mobile');
    Route::view('/flexipay', 'flexipay');
    Route::view('/tchangtchangmoney', 'tchangtchangmoney');
    Route::view('/cook-and-share', 'cook-and-share');
    Route::view('/genius-home', 'genius-home');
    Route::view('/ekoh-web', 'ekoh-web');
});

Route::prefix('blog')->group(function () {
    Route::view('/', 'blog');
    Route::get('/{id}', function ($id) {
        // abort_if(!isset($post[$id]), 404);
        return view('blog.post');
    })->name('blog.post');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send_message'])->name('contact.send');
