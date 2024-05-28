<?php

namespace App\Http\Controllers;

use App\Models\Register_student;
use Illuminate\Http\Request;

class RegisterStudent_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Register_student::get();
        return view("Admin.Register_Student",["data"=> $data]);
    }


    public function student_grades(){
        $register_student = Register_student::all();
        return $register_student;
        // return view("Admin.Student_Grades");
    
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // return $id;
        $data = Register_student::where("id", $id)->first();
        return view("Admin.info_regster_student",["data"=> $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
