<?php

use App\Http\Controllers\CaseController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\TrafficSignController;
use App\Http\Controllers\RulesBreakController;
use App\Http\Controllers\TrafficDashboardController;
use App\Http\Controllers\BlogController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/traffic-sign', [HomeController::class, 'trafficSign'])->name('trafficSign');
Route::get('/traffic-sign/details/{id}', [HomeController::class, 'categoryDetail'])->name('categoryDetail');
Route::get('/signDetail/{id}', [HomeController::class, 'signDetail'])->name('signDetail');
Route::get('/rules-break', [HomeController::class, 'rulesBreak'])->name('rulesBreak');
Route::post('/view-direction', [HomeController::class, 'viewDirection'])->name('viewDirection');
Route::get('/about-us', [HomeController::class, 'about'])->name('about-us');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact-us');
Route::get('/fare-details', [HomeController::class, 'fare'])->name('fare-details');
Route::get('/road-details', [HomeController::class, 'road'])->name('road-details');




    Route::middleware(['trafficAuth'])->group(function () {
    Route::post('/traffic/logout', [TrafficDashboardController::class, 'logout'])->name('traffic.logout');
    Route::get('/traffic/dashboard',[TrafficDashboardController::class, 'dashboard'])->name('trafficDashboard');
    Route::get('/traffic/case/add',[CaseController::class, 'add'])->name('traffic-case.add');
    Route::post('/traffic/case/create',[CaseController::class, 'create'])->name('traffic-case.create');
    Route::get('/traffic/case/manage',[CaseController::class, 'manage'])->name('traffic-case.manage');
    Route::get('/traffic/case/delete/{id}',[CaseController::class, 'delete'])->name('traffic-case.delete');
    });

    Route::get('/traffic/login', [TrafficDashboardController::class, 'login'])->name('traffic.login');
    Route::get('/traffic/register', [TrafficDashboardController::class, 'register'])->name('traffic.register');
    Route::post('/traffic/trafficLogin', [TrafficDashboardController::class, 'trafficLogin'])->name('trafficLogin');
    Route::post('/traffic/create', [TrafficDashboardController::class, 'create'])->name('traffic.create');


    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category-add', [CategoryController::class, 'add'])->name('category.add');
    Route::post('/category-add/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category-manage', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/category-delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    Route::post('/category-update/{id}', [CategoryController::class, 'update'])->name('category.update');


    Route::get('/traffic_sign-add', [TrafficSignController::class, 'add'])->name('traffic_sign.add');
    Route::get('/traffic_sign-manage', [TrafficSignController::class, 'manage'])->name('traffic_sign.manage');
    Route::post('/traffic_sign-add/create', [TrafficSignController::class, 'create'])->name('traffic_sign.create');
    Route::get('/traffic_sign-edit/{id}', [TrafficSignController::class, 'edit'])->name('traffic_sign.edit');
    Route::post('/traffic_sign-update/{id}', [TrafficSignController::class, 'update'])->name('traffic_sign.update');
    Route::get('/traffic_sign-delete/{id}', [TrafficSignController::class, 'delete'])->name('traffic_sign.delete');


    Route::get('/rulesBreak-add', [RulesBreakController::class, 'add'])->name('rulesBreak.add');
    Route::get('/rulesBreak-manage', [RulesBreakController::class, 'manage'])->name('rulesBreak.manage');
    Route::post('/rulesBreak-add/create', [RulesBreakController::class, 'create'])->name('rulesBreak.create');
    Route::get('/rulesBreak-edit/{id}', [RulesBreakController::class, 'edit'])->name('rulesBreak.edit');
    Route::post('/rulesBreak-update/{id}', [RulesBreakController::class, 'update'])->name('rulesBreak.update');
    Route::get('/rulesBreak-delete/{id}', [RulesBreakController::class, 'delete'])->name('rulesBreak.delete');


    Route::get('/map-direction-add',[DirectionController::class, 'add'])->name('direction.add');
    Route::get('/map-direction-manage',[DirectionController::class, 'manage'])->name('direction.manage');
    Route::post('/map-direction-add/create',[DirectionController::class, 'create'])->name('direction.create');
    Route::get('/map-direction-edit/{id}',[DirectionController::class, 'edit'])->name('direction.edit');
    Route::post('/map-direction-update/{id}',[DirectionController::class, 'update'])->name('direction.update');
    Route::get('/map-direction-delete/{id}',[DirectionController::class, 'delete'])->name('direction.delete');

    //Route::get('/', 'PostController@index');
    //Route::get('posts', PostController);


});
