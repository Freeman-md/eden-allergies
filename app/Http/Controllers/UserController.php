<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\Allergy;
use App\Http\Resources\Meal;
use App\Models\Allergy as ModelsAllergy;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

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
     * getAllergies
     *
     * @return void
     */
    public function getAllergies() {
        return response()->json(Allergy::collection($this->userAllergies()), Response::HTTP_OK);
    }

    /**
     * storeAllergies
     *
     * @param  App\Http\Requests\UserRequest $request
     * @param  App\Models\User $user
     * @return void
     */
    public function addAllergies(UserRequest $request) {
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
     * destroyAllergies
     *
     * @param  App\Http\Requests\UserRequest $request
     * @param  App\Models\User $user
     * @return void
     */
    public function removeAllergies(Request $request) {
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
     * getMeals
     *
     * @return void
     */
    public function getMeals() {
        $collection = Cache::remember(request()->fullUrl(), 60, function() {
            return $this->userAllergies()->map(function($allergy) {
                return $allergy->meals()->inRandomOrder()->get();
            });
        });

        $meals = $collection->collapse();

        return response()->json(Meal::collection($meals->all()), Response::HTTP_OK);
    }
}
