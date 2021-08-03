<?php

namespace App\Http\Controllers;

use App\Http\Requests\AllergyRequest;
use App\Models\Allergy;
use Illuminate\Http\Request;
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
        $allergies = Allergy::paginate(10);

        return response()->json($allergies, Response::HTTP_OK);
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

        return response()->json($allergy, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Allergy  $allergy
     * @return \Illuminate\Http\Response
     */
    public function show(Allergy $allergy)
    {
        return response()->json($allergy, Response::HTTP_OK);
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

        return response()->json($allergy, Response::HTTP_OK);
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

        return response()->json($allergy, Response::HTTP_OK);
    }
    
    /**
     * Get meals for the specified resource from storage
     *
     * @param  mixed $allergy
     * @return void
     */
    public function getAllergyMeals(Allergy $allergy) {
        $meals = $allergy->meals()->paginate(10);
        
        return response()->json($meals, Response::HTTP_OK);
    }
}
