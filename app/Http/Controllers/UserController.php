<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return UserResource::collection(User::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        User::create($request->all());
        return response()->json([
            "message"=>"Done !",
            "users"=>UserResource::collection(User::all())
        ]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        User::find($id)->update($request->all());
        return response()->json([
            "message"=>"Done !",
            "users"=>UserResource::collection(User::all())
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        User::destroy($id);
        return response()->json([
            "message"=>"Done !",
            "users"=>UserResource::collection(User::all())
        ]);
    }
}
