<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Classe;
use DB;
class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $classe= DB::table('classes')->get();
       return response()->json($classe);
   //return Classe::all();
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'class_name' => 'required|unique:classes|max:50',
            
        ]);

        $data=array();
        $data['class_name']=$request->class_name;
        DB::table('classes')->insert($data);
        return response('done');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $showData= DB::table('classes')->where('id',$id)->first();
       return response()->json($showData);
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=array();
        $data['class_name']=$request->class_name;

        DB::table('classes')->where('id',$id)->update($data);
        return response('Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('classes')->where('id',$id)->delete();
        return response('Deleted');
    }
}
