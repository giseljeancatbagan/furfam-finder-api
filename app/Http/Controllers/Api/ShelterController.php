<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShelterResource;
use App\Models\Shelter;
use Illuminate\Http\Request;

class ShelterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ShelterResource::collection(Shelter::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $shelter = new Shelter;
        $shelter->name = $request->input('name');
        $shelter->location = $request->input('location');
        $shelter->capacity = $request->input('capacity');
        $shelter->save();

        return new ShelterResource($shelter);
    }

    /**
     * Display the specified resource.
     */
    public function show(Shelter $shelter)
    {
        return ShelterResource::make($shelter);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $shelter = Shelter::findOrFail($id);
        $shelter->name = $request->input('name');
        $shelter->location = $request->input('location');
        $shelter->capacity = $request->input('capacity');
        $shelter->save();

        return new ShelterResource($shelter);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shelter = Shelter::findOrFail($id);
        $shelter->delete();

        return response(null, 204);
    }
}
