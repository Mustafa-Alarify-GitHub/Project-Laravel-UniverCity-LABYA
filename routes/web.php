<?php

use App\Http\Controllers\RegisterStudent_Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/regster_student", [RegisterStudent_Controller::class, "index"])->name("regster_student");
Route::get("/info-regster_student/{id}", [RegisterStudent_Controller::class, "edit"])->name("show.regster_student");
Route::put("/info-regster_student/{id}", [RegisterStudent_Controller::class, "update"])->name("update.regster_student");

Route::view("/Student_Grades", "Admin.Student_Grades")->name("Student_Grades");


//  Catogries page

//  Route::view("/Get_All_Cat","Admin.Catogries.Get_All_Cat")->name("Get_All_Cat");
Route::get("Get_All_Cat", function () {
    $data = DB::table("catogries")->get();
    return view("Admin.Catogries.Get_All_Cat", ["data" => $data]);
})->name("Get_All_Cat");
Route::view("/Setting_Cat", "Admin.Catogries.Setting_Cat")->name("Setting_Cat");


//  Library page

Route::view("/Setting_Library", "Admin.Library.Setting_Library")->name("Setting_Library");


Route::post("/add", function (Request $request) {
    //  return $request;
    DB::table("catogries")->insert(["name" => $request->name]);
    return to_route("Get_All_Cat");
})->name("Add");
