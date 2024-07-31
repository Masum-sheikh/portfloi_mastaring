<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashbordController;
Route::get('/',[WebsiteController::class, 'getmyallwesitedata'])->name('mywebsite');
Route::get('/mydeshbord',[DashbordController::class, 'mydeshbord'])->name('mydeshbord');
