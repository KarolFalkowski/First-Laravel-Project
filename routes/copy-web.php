<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\ContratorController;
use App\Http\Controllers\RecipesController;





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

Route::get('/', [MainController::class,'home']);
// Events

Route::get('/events/list', [EventsController::class,'index']);
// add and save
Route::get('/events/add', [EventsController::class,'create']); 
Route::post('/events/save', [EventsController::class,'store']);
// edit
Route::get('/events/edit/{id}', [EventsController::class,'edit']);
Route::post('/events/update/{id}', [EventsController::class,'update']);
// delete
Route::get('/events/show/{id}', [EventsController::class,'show']);
Route::post('/events/delete/{id}', [EventsController::class,'destroy']);

///

// Menu

Route::get('/menu/list', [MenuController::class,'index']);
// add and save
Route::get('/menu/add', [MenuController::class,'create']); 
Route::post('/menu/save', [MenuController::class,'store']);
// edit
Route::get('/menu/edit/{id}', [MenuController::class,'edit']);
Route::post('/menu/update/{id}', [MenuController::class,'update']);
// delete
Route::get('/menu/show/{id}', [MenuController::class,'show']);
Route::post('/menu/delete/{id}', [MenuController::class,'destroy']);

///

// Dish
Route::get('/dish/list', [DishController::class,'index']);
// add and save
Route::get('/dish/add', [DishController::class,'create']); 
Route::post('/dish/save', [DishController::class,'store']);
// edit
Route::get('/dish/edit/{id}', [DishController::class,'edit']);
Route::post('/dish/update/{id}', [DishController::class,'update']);
// delete
Route::get('/dish/show/{id}', [DishController::class,'show']);
Route::post('/dish/delete/{id}', [DishController::class,'destroy']);

///

// Contractor

Route::get('/contrator/list', [ContratorController::class,'index']);
// add and save
Route::get('/contrator/add', [ContratorController::class,'create']); 
Route::post('/contrator/save', [ContratorController::class,'store']);
// edit
Route::get('/contrator/edit/{id}', [ContratorController::class,'edit']);
Route::post('/contrator/update/{id}', [ContratorController::class,'update']);
// delete
Route::get('/contrator/show/{id}', [ContratorController::class,'show']);
Route::post('/contrator/delete/{id}', [ContratorController::class,'destroy']);

///

// Recipes

Route::get('/recipes/list', [RecipesController::class,'index']);
// add and save
Route::get('/recipes/add', [RecipesController::class,'create']); 
Route::post('/recipes/save', [RecipesController::class,'store']);
// edit
Route::get('/recipes/edit/{id}', [RecipesController::class,'edit']);
Route::post('/recipes/update/{id}', [RecipesController::class,'update']);
// delete
Route::get('/recipes/show/{id}', [RecipesController::class,'show']);
Route::post('/recipes/delete/{id}', [RecipesController::class,'destroy']);

///