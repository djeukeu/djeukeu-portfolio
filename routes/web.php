<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::post('/', [HomeController::class, 'subscribe'])->name('home.subscribe');

Route::view('/about', 'about');

Route::view('/resume', 'resume');

Route::prefix('projects')->group(function () {
    Route::view('/', 'projects');
    Route::view('/ekoh-mobile', 'projects.ekoh-mobile');
    Route::view('/flexipay', 'projects.flexipay');
    Route::view('/tchangtchangmoney', 'projects.tchangtchangmoney');
    Route::view('/cook-and-share', 'projects.cook-and-share');
    Route::view('/genius-home', 'projects.genius-home');
    Route::view('/ekoh-web', 'projects.ekoh-web');
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
