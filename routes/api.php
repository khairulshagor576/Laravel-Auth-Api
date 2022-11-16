<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*---------------------------
Public Routes
----------------------------*/
Route::get('/register',[UserController::class,'register']);


/*-----------------------------
Protected Routes
--------------------------------*/
