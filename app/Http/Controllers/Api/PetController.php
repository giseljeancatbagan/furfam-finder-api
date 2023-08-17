<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PetStoreRequest;
use App\Http\Resources\PetResource;
use App\Http\Resources\UserResource;
use App\Models\Pet;
use Carbon\Carbon;
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
    public function store(PetStoreRequest $request)
    {
        return PetResource::make(Pet::create([
            'species' => $request->species,
            'name' =>$request->name,
            'breed' =>$request->breed,
            'birthday' => Carbon::parse(strtotime($request->birthday)),
            'gender' =>$request->gender,
            'size' =>$request->size,
            'description' =>$request->description,
            'availability_status' =>$request->availability_status,
            'shelter_id' =>$request->shelter_id,

        ]));
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
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();
        return response()->json([
            'success' => true,
            'message' => 'Succesfully deleted'
       ]);
    }
}
