<?php

use App\Http\Controllers\AllergyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MealController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

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

// Routes for displaying data in database
Route::resource('allergies', AllergyController::class)->only(['index', 'show']);
Route::resource('meals', MealController::class)->only(['index', 'show']);
Route::resource('items', ItemController::class)->only(['index', 'show']);

// Get meals for allergy
Route::get('allergies/{allergy}/meals', [AllergyController::class, 'getAllergyMeals'])->name('allergy.meals');

// Get items for meal
Route::get('/meals/{meal}/items', [MealController::class, 'getMealItems'])->name('meal.items');

// Auth Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes for making changes to database
Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::apiResource('allergies', AllergyController::class)->except(['index', 'show']);
    Route::apiResource('meals', MealController::class)->except(['index', 'show']);
    Route::apiResource('items', ItemController::class)->except(['index', 'show']);
    // Logout
    Route::post('/logout', [AuthController::class, 'logout']);
});

// Fallback route
Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact info@myapp.com'], Response::HTTP_NOT_FOUND);
});