<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\section;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $section =section::all();
        return response()->json($section);
    }

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'section_name' => 'required',
            // 'class_id' => 'required|unique:subjects|max:50',
        ]);

        $section = section::create($request->all());
        return response()->json($section);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show= section::findorfail($id);
        return response()->json($show);
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $section = section::findorfail($id);
       $section->update($request->all());
       return response('Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        section::where('id',$id)->delete();
        return response('deleted');
    }
}
