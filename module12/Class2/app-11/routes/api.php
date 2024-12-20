<?php

use App\Http\Controllers\DemoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

route::get('/DemoAction',[DemoController::class, 'DemoAction']);
