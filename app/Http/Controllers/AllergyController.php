<?php

namespace App\Http\Controllers;

use App\Http\Requests\AllergyRequest;
use App\Http\Resources\Allergy as ResourcesAllergy;
use App\Http\Resources\Meal as ResourcesMeal;
use App\Models\Allergy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

/**
 * @group Allergy Management
 *
 * APIs for managing allergies
 */
class AllergyController extends Controller
{
    /**
     * GET api/allergies
     * 
     * Display a listing of allergies
     * 
     * @queryParam page Page number to show.
     * 
     * @apiResourceCollection App\Http\Resources\Allergy
     * @apiResourceModel App\Models\Allergy paginate=10
     *
     * @responseField id The id of the allergy
     * @responseField title The title of the allergy
     * @responseField description The description of the allergy
     * @responseField meals The url to get allergy meals
     * @responseField created_at Timestamp allergy was created
     * @responseField updated_at Timestamp allergy was last updated
     * @responseField deleted_at Timestamp allergy was trashed
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get allergies from CACHE if exists else get allergies from database and add them CACHE
        $allergies = Cache::remember(request()->fullUrl(), 60, function() {
            return Allergy::paginate(10);
        });

        return ResourcesAllergy::collection($allergies);
    }

    /**
     * POST api/allergies
     * 
     * Store a newly created allergy in storage.
     * 
     * @bodyParam title string required The title of the allergy
     * @bodyParam description string The description of the allergy
     * 
     * @apiResource App\Http\Resources\Allergy
     * @apiResourceModel App\Models\Allergy
     *
     * @responseField id The id of the newly created allergy
     * @responseField title The title of the allergy
     * @responseField description The description of the allergy
     * @responseField meals The url to get allergy meals
     * @responseField created_at Timestamp allergy was created
     * @responseField updated_at Timestamp allergy was last updated
     * @responseField deleted_at Timestamp allergy was trashed
     *
     * @param  \App\Http\Requests\AllergyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AllergyRequest $request)
    {

        $allergy = Allergy::create($request->all());

        return response()->json(new ResourcesAllergy($allergy), Response::HTTP_CREATED);
    }

    /**
     * GET api/allergies/{id}
     * 
     * Get a specific allergy
     * 
     * @param  \App\Models\Allergy  $allergy
     * 
     * @apiResource App\Http\Resources\Allergy
     * @apiResourceModel App\Models\Allergy
     *
     * @responseField id The id of the newly created allergy
     * @responseField title The title of the allergy
     * @responseField description The description of the allergy
     * @responseField meals The url to get allergy meals
     * @responseField created_at Timestamp allergy was created
     * @responseField updated_at Timestamp allergy was last updated
     * @responseField deleted_at Timestamp allergy was trashed
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Allergy $allergy)
    {
        return response()->json(new ResourcesAllergy($allergy), Response::HTTP_OK);
    }

    /**
     * PUT api/allergies/{id}
     * 
     * Update the specified allergy in storage.
     *
     * @param  \App\Http\Requests\AllergyRequest  $request
     * @param  \App\Models\Allergy  $allergy
     * 
     * @bodyParam title string required The new title of the allergy
     * @bodyParam description string The new description of the allergy
     * 
     * @apiResource App\Http\Resources\Allergy
     * @apiResourceModel App\Models\Allergy
     *
     * @responseField id The id of the newly created allergy
     * @responseField title The title of the allergy
     * @responseField description The description of the allergy
     * @responseField meals The url to get allergy meals
     * @responseField created_at Timestamp allergy was created
     * @responseField updated_at Timestamp allergy was last updated
     * @responseField deleted_at Timestamp allergy was trashed
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(AllergyRequest $request, Allergy $allergy)
    {
        $allergy->update($request->all());

        return response()->json(new ResourcesAllergy($allergy), Response::HTTP_OK);
    }

    /**
     * DELETE api/allergies/{id}
     *
     * Remove the specified allergy from storage.
     * 
     * @param  \App\Models\Allergy  $allergy
     * 
     * @apiResource App\Http\Resources\Allergy
     * @apiResourceModel App\Models\Allergy
     *
     * @responseField id The id of the newly created allergy
     * @responseField title The title of the allergy
     * @responseField description The description of the allergy
     * @responseField meals The url to get allergy meals
     * @responseField created_at Timestamp allergy was created
     * @responseField updated_at Timestamp allergy was last updated
     * @responseField deleted_at Timestamp allergy was trashed
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Allergy $allergy)
    {
        $allergy->delete();

        return response()->json(new ResourcesAllergy($allergy), Response::HTTP_OK);
    }
    
    /**
     * GET api/allergies/{id}/meals
     * 
     * Display meals for the specified allergy from storage
     * 
     * @apiResourceCollection App\Http\Resources\Meal
     * @apiResourceModel App\Models\Meal paginate=10
     * 
     * @responseField id The id of a meal
     * @responseField title The title of a meal
     * @responseField description The description of a allergy
     * @responseField allergy The allergy the meal belongs to
     * @responseField items The url to get meal items
     * @responseField created_at Timestamp meal was created
     * @responseField updated_at Timestamp meal was last updated
     * @responseField deleted_at Timestamp meal was trashed
     *
     * @param \App\Models\Allergy $allergy
     * @return Illuminate\Http\Response
     */
    public function getAllergyMeals(Allergy $allergy) {
        // Get allergy meals from CACHE if exists else get allergy meals from database and add them CACHE
        $meals = Cache::remember(request()->fullUrl(), 60, function() use ($allergy) {
            return $allergy->meals()->paginate(10);
        });
        
        return ResourcesMeal::collection($meals);
    }
}
