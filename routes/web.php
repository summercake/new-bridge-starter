<?php
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
Route::get('/', function (){
    return view('welcome');
})->name('home');
Route::get('/recruitment', function (){
    return view('recruiter');
})->name('recruiter');
Route::get('/candidate', function (){
    return view('candidate');
})->name('candidate');
