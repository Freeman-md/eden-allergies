<?php

namespace App\Http\Controllers;

use App\Http\Requests\MealRequest;
use App\Http\Resources\Item as ResourcesItem;
use App\Http\Resources\Meal as ResourcesMeal;
use App\Models\Allergy;
use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
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
        // Get meals from CACHE if exists else get meals from database and add them CACHE
        $meals = Cache::remember(request()->fullUrl(), 60, function() {
            return Meal::paginate(10);
        });
        
        return ResourcesMeal::collection($meals);
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

        return response()->json(new ResourcesMeal($meal), Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        return response()->json(new ResourcesMeal($meal), Response::HTTP_OK);
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

        return response()->json(new ResourcesMeal($meal), Response::HTTP_OK);
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

        return response()->json(new ResourcesMeal($meal), Response::HTTP_OK);
    }
    
    /**
     * Get items for the specified resource from storage
     *
     * @param  mixed $meal
     * @return void
     */
    public function getMealItems(Meal $meal) {
        // Get meal items from CACHE if exists else get meal items from database and add them CACHE
        $items = Cache::remember(request()->fullUrl(), 60, function() use ($meal) {
            return $meal->items()->paginate(10);
        });
        
        return ResourcesItem::collection($items);
    }
}
