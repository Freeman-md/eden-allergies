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

/**
 * @group Meal Management
 *
 * APIs for managing meals
 */
class MealController extends Controller
{
    /**
     * GET api/meals
     * 
     * Display a listing of meals
     * 
     * @queryParam page Page number to show.
     * 
     * @apiResourceCollection App\Http\Resources\Meal
     * @apiResourceModel App\Models\Meal paginate=10
     *
     * @responseField id The id of the meal
     * @responseField title The title of the meal
     * @responseField description The description of the meal
     * @responseField allergy The allergy the meal belongs to
     * @responseField items The url to get meal items
     * @responseField created_at Timestamp meal was created
     * @responseField updated_at Timestamp meal was last updated
     * @responseField deleted_at Timestamp meal was trashed
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
     * POST api/meals
     * 
     * Store a newly created meal in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * 
     * @bodyParam title string required The new title of the meal
     * @bodyParam description string The new description of the meal
     * 
     * @apiResource App\Http\Resources\Meal
     * @apiResourceModel App\Models\Meal
     * 
     * @responseField id The id of the meal
     * @responseField title The title of the meal
     * @responseField description The description of the meal
     * @responseField allergy The allergy the meal belongs to
     * @responseField items The url to get meal items
     * @responseField created_at Timestamp meal was created
     * @responseField updated_at Timestamp meal was last updated
     * @responseField deleted_at Timestamp meal was trashed
     *
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
     * GET api/meals/{id}
     * 
     * Display the specified meal.
     * 
     * @param  \App\Models\Meal  $meal
     * 
     * @apiResource App\Http\Resources\Meal
     * @apiResourceModel App\Models\Meal
     * 
     * @responseField id The id of the meal
     * @responseField title The title of the meal
     * @responseField description The description of the meal
     * @responseField allergy The allergy the meal belongs to
     * @responseField items The url to get meal items
     * @responseField created_at Timestamp meal was created
     * @responseField updated_at Timestamp meal was last updated
     * @responseField deleted_at Timestamp meal was trashed
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        return response()->json(new ResourcesMeal($meal), Response::HTTP_OK);
    }

    /**
     * PUT api/meals/{id}
     * 
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meal  $meal
     * 
     * @bodyParam title string required The new title of the meal
     * @bodyParam description string The new description of the meal
     * 
     * @apiResource App\Http\Resources\Meal
     * @apiResourceModel App\Models\Meal
     * 
     * @responseField id The id of the meal
     * @responseField title The title of the meal
     * @responseField description The description of the meal
     * @responseField allergy The allergy the meal belongs to
     * @responseField items The url to get meal items
     * @responseField created_at Timestamp meal was created
     * @responseField updated_at Timestamp meal was last updated
     * @responseField deleted_at Timestamp meal was trashed
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        $meal->update($request->all());

        return response()->json(new ResourcesMeal($meal), Response::HTTP_OK);
    }

    /**
     * DELETE api/meals/{id}
     * 
     * Remove the specified resource from storage.
     * 
     * @param  \App\Models\Meal  $meal
     * 
     * @apiResource App\Http\Resources\Meal
     * @apiResourceModel App\Models\Meal
     * 
     * @responseField id The id of the meal
     * @responseField title The title of the meal
     * @responseField description The description of the meal
     * @responseField allergy The allergy the meal belongs to
     * @responseField items The url to get meal items
     * @responseField created_at Timestamp meal was created
     * @responseField updated_at Timestamp meal was last updated
     * @responseField deleted_at Timestamp meal was trashed
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        $meal->delete();

        return response()->json(new ResourcesMeal($meal), Response::HTTP_OK);
    }
    
    /**
     * GET api/meals/{id}/items
     *
     * Get items for the specified meal from storage
     * 
     * @param  App\Models\Meal $meal
     * 
     * @apiResourceCollection App\Http\Resources\Item
     * @apiResourceModel App\Models\Item paginate=10
     * 
     * @responseField id The id of the item
     * @responseField title The title of the item
     * @responseField description The description of the item
     * @responseField created_at Timestamp item was created
     * @responseField updated_at Timestamp item was last updated
     * @responseField deleted_at Timestamp item was trashed
     *
     * @return \Illuminate\Http\Response
     */
    public function getMealItems(Meal $meal) {
        // Get meal items from CACHE if exists else get meal items from database and add them CACHE
        $items = Cache::remember(request()->fullUrl(), 60, function() use ($meal) {
            return $meal->items()->paginate(10);
        });
        
        return ResourcesItem::collection($items);
    }
}
