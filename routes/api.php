<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NodemcuLogController;



    Route::post('log', [NodemcuLogController::class, 'createLogData']);
