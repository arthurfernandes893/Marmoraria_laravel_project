<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

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


Route::get('/', [EventController::class,'index']);

Route::get('/parceiros', [EventController::class,'parceiros']);

Route::get('/orcamentos', [EventController::class,'orcamentos']);

