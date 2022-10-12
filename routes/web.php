<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProductController;
use App\http\Controllers\usercontroller;


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


Route::get('/mdi', function () {
    return view('mdi');
});
Route::get('/dropdowns', function () {
    return view('dropdowns');
});
Route::get('/course-grid-8', function () {
    return view('course-grid-8');
});
Route::get('/course-grid-7', function () {
    return view('course-grid-7');
});
Route::get('/course-grid-6', function () {
    return view('course-grid-6');
});
Route::get('/course-grid-5', function () {
    return view('course-grid-5');
});
Route::get('/course-grid-4', function () {
    return view('course-grid-4');
});
Route::get('/course-grid-3', function () {
    return view('course-grid-3');
});
Route::get('/course-grid-2', function () {
    return view('course-grid-2');
});
Route::get('/contact1', function () {
    return view('contact1');
});
Route::get('/charts', function () {
    return view('charts');
});
Route::get('/buttons', function () {
    return view('buttons');
});
Route::get('/basic-table', function () {
    return view('basic-table');
});
Route::get('/basic-eleements', function () {
    return view('basic-elements');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/index', function () {
    return view('index');
});

    
Route::post('/insert',[ProductController::class,('insertuser')]);

Route::get('/register',[usercontroller::class,('register')]);
Route::post('/registerpost',[usercontroller::class,('registerpost')]);

Route::get('/signin',[usercontroller::class,('signin')]);
Route::post('/signinpost',[usercontroller::class,('signinpost')]);

Route::get('/logout',[usercontroller::class,('logout')]);
Route::get('/adminlogout',[usercontroller::class,('logout')]);





Route::get('/',[usercontroller::class,'signin']);
Route::get('/form',[usercontroller::class,('form')]);

Route::get('/form',[ProductController::class,'index']);

Route::get('/getcity',[ProductController::class,'getcity']);
Route::post('/citypost',[ProductController::class,'citypost']);


Route::get('/adduniversity',[ProductController::class,'adduniversity']);
Route::post('/universitypost',[ProductController::class,'universitypost']);


Route::get('/universities',[usercontroller::class,'universities']);
