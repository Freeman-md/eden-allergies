<?php

namespace App\Http\Controllers;

use App\Http\Requests\MealRequest;
use App\Models\Allergy;
use App\Models\Meal;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::paginate(10);
        
        return response()->json($meals, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MealRequest $request)
    {
        // Get specified allergy resource
        $allergy = Allergy::findOrFail($request->allergy);

        // Create meal for gotten allergy resource
        $meal = $allergy->meals()->create($request->all());

        return response()->json($meal, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        return response()->json($meal, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        $meal->update($request->all());

        return response()->json($meal, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        $meal->delete();

        return response()->json($meal, Response::HTTP_OK);
    }
    
    /**
     * Get items for the specified resource from storage
     *
     * @param  mixed $meal
     * @return void
     */
    public function getMealItems(Meal $meal) {
        $items = $meal->items()->paginate(10);
        
        return response()->json($items, Response::HTTP_OK);
    }
}
