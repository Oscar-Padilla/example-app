<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Address;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$student = DB::table('students')->get();
        $student = Student::find(1);
        return $student->program;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = Student::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'control' => $request->control,
            'email' => $request->email,
            'semester' => $request->semester,
            'program_id' => $request->program_id,
        ]);
        $student->save();

        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $student = Student::where('name', $request->name)
                            ->where('last_name', $request->last_name)->get();
        
        //$student = Student::find($request->id);

        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        global $id;
        $id = $request->id;
        session()->put('id', $id);
        $student = Student::find($id);
        return $student;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        global $id; 
        $id = session()->get('id');
        $student = Student::find($id);
        $student -> update([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'control' => $request->control,
            'email' => $request->email,
            'semester' => $request->semester,
        ]);
        return $student;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $student = Student::where('control', $request->control)->delete();
        return $student;
    }


    public function token(){
        return csrf_token();
    }

}
