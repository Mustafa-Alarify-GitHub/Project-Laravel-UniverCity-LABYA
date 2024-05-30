<?php

namespace App\Http\Controllers;

use App\Models\Register_student;
use App\Models\Stetting;
use Illuminate\Http\Request;

class RegisterStudent_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Register_student::orderBy("id","desc")->get();
        $wait = Register_student::where("status_regster","انتظر")->count();
        $yes = Register_student::where("status_regster","مقبول")->count();
        $no = Register_student::where("status_regster","مرفوض")->count();
        $isOpen =Stetting::where("id","1")->first("isOpenRegister");

        if($isOpen){
            return view("Admin.Register_Student", [
                "data" => $data,
                "wait" => $wait,
                "yes" => $yes,
                "no" => $no,
                "isOpen" => $isOpen,
            ]);
        }else{
            $isOpen =['isOpenRegister'=>0];

             return view("Admin.Register_Student", [
            "data" => $data,
            "wait" => $wait,
            "yes" => $yes,
            "no" => $no,
            "isOpen" => null,
        ]);
        }
       
    }


    public function student_grades()
    {
        // $register_student = Register_student::all();
        // return $register_student;
        return view("Admin.Student_Grades");

    }

    /**
     * Show the form for creating a new resource.
     */
   

    /**
     * Store a newly created resource in storage.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
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
}
