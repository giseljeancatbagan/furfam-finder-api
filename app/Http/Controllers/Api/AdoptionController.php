<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdoptionStoreRequest;
use App\Http\Requests\AdoptionUpdateRequest;
use App\Http\Resources\AdoptionResource;
use App\Models\Adoption;
use Carbon\Carbon;
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
    public function store(AdoptionStoreRequest $request)
    {
        return AdoptionResource::make(Adoption::create([
            'pet_id' => $request->pet_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'contact_info' => $request->contact_info,
            'adoption_date' =>Carbon::parse(strtotime($request->adoption_date)),

        ]));
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
    public function update(AdoptionUpdateRequest $request, Adoption $adoption)
    {
       if (isset($request->pet_id)) {
        $adoption->pet_id = $request->pet_id;
       }

       if (isset($request->first_name)) {
        $adoption->first_name = $request->first_name;
       }

       if (isset($request->last_name)) {
        $adoption->last_name = $request->last_name;
       }

       if (isset($request->contact_info)) {
        $adoption->contact_info = $request->contact_info;
       }

       if (isset($request->adoption_date)) {
        $adoption->adoption_date = $request->adoption_date;
       }

       $adoption->save();

       return AdoptionResource::make($adoption);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adoption $adoption)
    {
        $adoption->delete();
        return response()->json([
            'success' => true,
            'message' => 'Succesfully deleted'
       ]);
    }
}
