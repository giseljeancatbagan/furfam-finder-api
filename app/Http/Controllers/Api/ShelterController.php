<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShelterStoreRequest;
use App\Http\Requests\ShelterUpdateRequest;
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
    public function store(ShelterStoreRequest $request)
    {
        return ShelterResource::make(Shelter::create([

            'name'=> $request->name,
            'location' => $request->location,
            'contact_info' => $request->contact_info,
            'user_id' => $request->user_id

        ]));
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
    public function update(ShelterUpdateRequest $request, Shelter $shelter)
    {
        if (isset($request->name)) {
            $shelter->name = $request->name;
        }

        if (isset($request->location)) {
            $shelter->location = $request->location;
        }

        if (isset($request->contact_info)) {
            $shelter->contact_info = $request->contact_info;
        }

        if (isset($request->user_id)) {
            $shelter->user_id = $request->user_id;
        }

        $shelter->save();

        return ShelterResource::make($shelter);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shelter $shelter)
    {
        $shelter->delete();
        return response()->json([
            'success' => true,
            'message' => 'Succesfully deleted'
       ]);
    }
}
