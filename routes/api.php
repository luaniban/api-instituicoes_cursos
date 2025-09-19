<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::apiResource('instituicoes', App\Http\Controllers\api\InstituicaoController::class);
