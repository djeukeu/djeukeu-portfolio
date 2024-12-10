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
    Route::view('/cook-and-share', 'projects.cook&Share');
    Route::view('/ekoh-online', 'projects.ekohOnline');
    Route::view('/camxi', 'projects.camxi');
    Route::view('/dschat', 'projects.dschat');
    Route::view('/mobile-app-ci-cd-using-fastlane-and-github-actions', 'projects.mobile_ci_cd');
    Route::view('/web-server-ci-cd-using-aws-cloudformation-and-github-actions', 'projects.server_ci_cd');
    Route::view('/microservice-cloud-insfrastructure-deployment-with-terraform-and-circleci', 'projects.microservice_ci_cd');
    Route::view('/microservice-orchestration-with-kubernetes', 'projects.microservice_kubernetes');
});

Route::post('/contact', [ContactController::class, 'send_message'])->name('contact.send');
