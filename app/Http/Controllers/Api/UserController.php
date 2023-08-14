<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserResource::collection(User::all());
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        return UserResource::make(User::create([
        'username' => $request->username,
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'contact_info' => $request->contact_info,
        'password' => bcrypt($request->password)
        
        ]));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return UserResource::make($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user)
    {
       if (isset($request->username)) {
            $user->username = $request->username;
       }

       if (isset($request->first_name)) {
            $user->first_name = $request->first_name;
        }

        if (isset($request->last_name)) {
            $user->last_name = $request->last_name;
       }

       if (isset($request->contact_info)) {
            $user->contact_info = $request->contact_info;
        }

        if (isset($request->username)) {
            $user->username = $request->username;
        }   

        if (isset($request->password)) {
            $user->password = $request->password;
        }

        $user->save();

        return UserResource::make($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
       $user->delete();
       return response()->json([
        'success' => true,
        'message' => 'Successfully deleted'
       ]);
    }
}
