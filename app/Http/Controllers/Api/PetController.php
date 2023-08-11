<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PetResource;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PetResource::collection(Pet::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pet = new Pet;
        $pet->name = $request->input('name');
        $pet->age = $request->input('age');
        $pet->breed = $request->input('breed');
        $pet->save();

        return new PetResource($pet);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        return PetResource::make($pet);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
