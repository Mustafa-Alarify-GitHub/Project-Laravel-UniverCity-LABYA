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
        $data = Register_student::orderByDesc("id")->limit(20)->get();
        $count_no = Register_student::where("status_regster", "مرفوض")->count();
        $count_yes = Register_student::where("status_regster", "مقبول")->count();
        $count_wait = Register_student::where("status_regster", "انتظر")->count();
        return view("Admin.Register_Student", ["data" => $data, "yes" => $count_yes, "no" => $count_no, "wait" => $count_wait]);
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
    public function edit($id)
    {
        // return $id;
        $data = Register_student::where("id", $id)->first();
        return view("Admin.info_regster_student", ["data" => $data]);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Register_student::where("id", $id)->update([
            "status_regster" => $request->status_regster,
        ]);
        return to_route("regster_student");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
