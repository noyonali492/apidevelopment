<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subject =Subject::all();
        return response()->json($subject);
    }

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'subject_name' => 'required|unique:subjects|max:50',
            // 'class_id' => 'required|unique:subjects|max:50',
        ]);

        $subject = Subject::create($request->all());
        return response()->json($subject);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show= Subject::findorfail($id);
        return response()->json($show);
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $subject = Subject::findorfail($id);
       $subject->update($request->all());
       return response('Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Subject::where('id',$id)->delete();
        return response('deleted');
    }
}
