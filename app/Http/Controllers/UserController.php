<?php

namespace App\Http\Controllers;

use App\Http\Resources\Allergy;
use App\Http\Resources\Meal;
use App\Models\Allergy as ModelsAllergy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

/**
 * @group User Endpoints
 *
 * API Endpoints for managing users
 */
class UserController extends Controller
{   
    
    /**
     * userAllergies
     *
     * @return void
     */
    public function userAllergies() {
        return Cache::remember('user_allergies', 60, function() {
            return auth()->user()->allergies;
        });
    }
    
    /**
     * GET  api/users/allergies
     * 
     * Get allergies for authenticated user
     * 
     * @authenticated
     * 
     * @apiResourceCollection App\Http\Resources\Allergy
     * @apiResourceModel App\Models\Allergy
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
    public function getAllergies() {
        return response()->json(Allergy::collection($this->userAllergies()), Response::HTTP_OK);
    }

    /**
     * GET  api/users/allergies/add
     * 
     * Add allergies for authenticated user
     * 
     * @authenticated
     * 
     * @param  \App\Http\Requests\Request  $request
     * 
     * @bodyParam allergies required array Array of allergy ids to add
     * 
     * @apiResourceCollection App\Http\Resources\Allergy
     * @apiResourceModel App\Models\Allergy
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
    public function addAllergies(Request $request) {
        $request->validate([
            'allergies' => 'required'
        ]);

        $ids = array_map('intval', json_decode($request->input('allergies')));

        foreach ($ids as $id) {
            if (ModelsAllergy::findOrFail($id)) {
                // SyncWithoutDetaching - To avoid duplicate entries
                auth()->user()->allergies()->syncWithoutDetaching($id);
            }
        }

        return response()->json(Allergy::collection($this->userAllergies()), Response::HTTP_CREATED);
    }

    
    /**
     * GET  api/users/allergies/remove
     * 
     * Remove allergies for authenticated user
     * 
     * @authenticated
     * 
     * @param  \App\Http\Requests\Request  $request
     * 
     * @bodyParam allergies required array Array of allergy ids to remove
     * 
     * @apiResourceCollection App\Http\Resources\Allergy
     * @apiResourceModel App\Models\Allergy
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
    public function removeAllergies(Request $request) {
        $request->validate([
            'allergies' => 'required'
        ]);

        $ids = array_map('intval', json_decode($request->input('allergies')));

        foreach ($ids as $id) {
            if (ModelsAllergy::findOrFail($id)) {
                // SyncWithoutDetaching - To avoid duplicate entries
                auth()->user()->allergies()->detach($id);
            }
        }

        return response()->json(Allergy::collection($this->userAllergies()), Response::HTTP_OK);
    }

        
    /**
     * GET api/users/allergies/meals
     * 
     * Get Meal Recommendations
     * 
     * 
     * @apiResourceCollection App\Http\Resources\Meal
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
    public function getMeals() {
        $collection = Cache::remember(request()->fullUrl(), 20, function() {
            return $this->userAllergies()->map(function($allergy) {
                return $allergy->meals()->inRandomOrder()->get();
            });
        });

        $meals = $collection->collapse();

        return response()->json(Meal::collection($meals->all()), Response::HTTP_OK);
    }
    
    /**
     * GET  api/user
     * 
     * Get authenticated user details
     * 
     * @authenticated
     * 
     * @responseField id The id of the user
     * @responseField name The name of the user
     * @responseField email The email of the user
     * @responseField created_at Timestamp user was created
     * @responseField updated_at Timestamp user was last updated
     * @responseField deleted_at Timestamp user was trashed
     *
     * @return \Illuminate\Http\Response
     */
    public function getUser() {
        return response()->json(auth()->user(), Response::HTTP_OK);
    }
}
