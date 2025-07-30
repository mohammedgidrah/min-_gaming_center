<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('minpage');
});
Route::get("viprooms",function(){
    return view("viprooms");
});
Route::get("team",function(){
    return view("team");
});
Route::get("contact",function(){
    return view("contact");
});
Route::get("menu",function(){
    return view("menu");
});
Route::get("equipment",function(){
    return view("equipment");
});
Route::get("arcadegames",function(){
    return view("arcadegames");
});
Route::get("activities",function(){
    return view("activities");
});
Route::get("about",function(){
    return view("about");
});
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');
