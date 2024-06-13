<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index' , [PortoController::class, 'index']);
Route::get('about', [Portocontroller::class, 'about']);
Route::get('service', [Portocontroller::class, 'service']);
Route::get('contact', [Portocontroller::class, 'contact']);
