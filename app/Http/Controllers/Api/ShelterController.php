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
        //
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
