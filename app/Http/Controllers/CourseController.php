<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Resources\CourseResource;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return CourseResource::collection(Course::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Course::create($request->all());
        return response()->json(['message'=>'Done! ','courses'=>CourseResource::collection(Course::all())]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        Course::find($id)->update($request->all());
        return response()->json(['message'=>'Done! ','courses'=>CourseResource::collection(Course::all())]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Course::destroy($id);
        return response()->json(['message'=>'Done! ','courses'=>CourseResource::collection(Course::all())]);
    }
}
