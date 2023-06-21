<?php

namespace App\Http\Controllers;

use App\Http\Resources\FormationResource;
use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::all();
        return FormationResource::collection($formations);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Formation::create($request->all());
        return response()->json([
            'message' => 'Done',
            'formations' => FormationResource::collection(Formation::all())
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Formation $formation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Formation::findOrFail($id)->update($request->all());
        return response()->json([
            'message' => 'Update',
            'formations' => FormationResource::collection(Formation::all())
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Formation::destroy($id);
        return response()->json(['message' => 'Delete with success']);
    }
}
