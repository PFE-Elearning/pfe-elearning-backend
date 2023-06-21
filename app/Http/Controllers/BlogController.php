<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return BlogResource::collection($blogs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blog::create($request->all());
        return response()->json([
            'message' => 'Done' ,
            'blogs' => BlogResource::collection(Blog::all())
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Blog::findOrFail($id)->update($request->all());
        return response()->json([
            'message' => 'Update' ,
            'blogs' => BlogResource::collection(Blog::all())
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Blog::destroy($id);
        return response()->json(['message' => 'Delete with success']);
    }
}
