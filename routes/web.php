<?php

use App\Http\Controllers\ProfileController;
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





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MainController::class,'home']);
// Events

Route::get('/events/list', [EventsController::class,'index']);
// add and save
Route::get('/events/add', [EventsController::class,'create'])-> middleware('auth'); 
Route::post('/events/save', [EventsController::class,'store'])-> middleware('auth');
// edit
Route::get('/events/edit/{id}', [EventsController::class,'edit'])-> middleware('auth');
Route::post('/events/update/{id}', [EventsController::class,'update'])-> middleware('auth');
// delete
Route::get('/events/show/{id}', [EventsController::class,'show'])-> middleware('auth');
Route::post('/events/delete/{id}', [EventsController::class,'destroy'])-> middleware('auth');

///

// Menu

Route::get('/menu/list', [MenuController::class,'index']);
// add and save
Route::get('/menu/add', [MenuController::class,'create'])-> middleware('auth'); 
Route::post('/menu/save', [MenuController::class,'store'])-> middleware('auth');
// edit
Route::get('/menu/edit/{id}', [MenuController::class,'edit'])-> middleware('auth');
Route::post('/menu/update/{id}', [MenuController::class,'update'])-> middleware('auth');
// delete
Route::get('/menu/show/{id}', [MenuController::class,'show'])-> middleware('auth');
Route::post('/menu/delete/{id}', [MenuController::class,'destroy'])-> middleware('auth');

///

// Dish
Route::get('/dish/list', [DishController::class,'index']);
// add and save
Route::get('/dish/add', [DishController::class,'create'])-> middleware('auth'); 
Route::post('/dish/save', [DishController::class,'store'])-> middleware('auth');
// edit
Route::get('/dish/edit/{id}', [DishController::class,'edit'])-> middleware('auth');
Route::post('/dish/update/{id}', [DishController::class,'update'])-> middleware('auth');
// delete
Route::get('/dish/show/{id}', [DishController::class,'show'])-> middleware('auth');
Route::post('/dish/delete/{id}', [DishController::class,'destroy'])-> middleware('auth');

///

// Contractor

Route::get('/contrator/list', [ContratorController::class,'index']);
// add and save
Route::get('/contrator/add', [ContratorController::class,'create'])-> middleware('auth'); 
Route::post('/contrator/save', [ContratorController::class,'store'])-> middleware('auth');
// edit
Route::get('/contrator/edit/{id}', [ContratorController::class,'edit'])-> middleware('auth');
Route::post('/contrator/update/{id}', [ContratorController::class,'update'])-> middleware('auth');
// delete
Route::get('/contrator/show/{id}', [ContratorController::class,'show'])-> middleware('auth');
Route::post('/contrator/delete/{id}', [ContratorController::class,'destroy'])-> middleware('auth');

///

// Recipes

Route::get('/recipes/list', [RecipesController::class,'index']);
// add and save
Route::get('/recipes/add', [RecipesController::class,'create'])-> middleware('auth'); 
Route::post('/recipes/save', [RecipesController::class,'store'])-> middleware('auth');
// edit
Route::get('/recipes/edit/{id}', [RecipesController::class,'edit'])-> middleware('auth');
Route::post('/recipes/update/{id}', [RecipesController::class,'update'])-> middleware('auth');
// delete
Route::get('/recipes/show/{id}', [RecipesController::class,'show'])-> middleware('auth');
Route::post('/recipes/delete/{id}', [RecipesController::class,'destroy'])-> middleware('auth');

///
Route::get('/login', [MainController::class,'zmienStanUwierzytelnienia']);
Route::get('/logout', [MainController::class,'zmienStanUwierzytelnienia']);

require __DIR__.'/auth.php';
