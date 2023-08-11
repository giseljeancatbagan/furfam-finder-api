<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdoptionResource;
use App\Models\Adoption;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return AdoptionResource::collection(Adoption::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $adoption = new Adoption;
        $adoption->name = $request->input('name');
        $adoption->age = $request->input('age');
        $adoption->breed = $request->input('breed');
        $adoption->save();

        return new AdoptionResource($adoption);
    }

    /**
     * Display the specified resource.
     */
    public function show(Adoption $adoption)
    {
        return AdoptionResource::make($adoption);
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
