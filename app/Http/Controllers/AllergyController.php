<?php

namespace App\Http\Controllers;

use App\Http\Requests\AllergyRequest;
use App\Http\Resources\Allergy as ResourcesAllergy;
use App\Http\Resources\Meal as ResourcesMeal;
use App\Models\Allergy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class AllergyController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AllergyRequest $request)
    {

        $allergy = Allergy::create($request->all());

        return response()->json(new ResourcesAllergy($allergy), Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Allergy  $allergy
     * @return \Illuminate\Http\Response
     */
    public function show(Allergy $allergy)
    {
        return response()->json(new ResourcesAllergy($allergy), Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Allergy  $allergy
     * @return \Illuminate\Http\Response
     */
    public function update(AllergyRequest $request, Allergy $allergy)
    {
        $allergy->update($request->all());

        return response()->json(new ResourcesAllergy($allergy), Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Allergy  $allergy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Allergy $allergy)
    {
        $allergy->delete();

        return response()->json(new ResourcesAllergy($allergy), Response::HTTP_OK);
    }
    
    /**
     * Get meals for the specified resource from storage
     *
     * @param  mixed $allergy
     * @return void
     */
    public function getAllergyMeals(Allergy $allergy) {
        // Get allergy meals from CACHE if exists else get allergy meals from database and add them CACHE
        $meals = Cache::remember(request()->fullUrl(), 60, function() use ($allergy) {
            return $allergy->meals()->paginate(10);
        });
        
        return ResourcesMeal::collection($meals);
    }
}
