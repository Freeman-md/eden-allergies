<?php

use App\Http\Controllers\AllergyController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MealController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('allergies', AllergyController::class)->except(['edit', 'create']);
Route::resource('meals', MealController::class)->except(['edit', 'create']);
Route::resource('items', ItemController::class)->except(['edit', 'create']);

Route::get('allergies/{allergy}/meals', [AllergyController::class, 'getAllergyMeals'])->name('allergy.meals');
Route::get('/meals/{meal}/items', [MealController::class, 'getMealItems'])->name('meal.items');

Route::fallback(function(){
    return response()->json([
        'error' => 'Page Not Found. If error persists, contact info@myapp.com'], 404);
});