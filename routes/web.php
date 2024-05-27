<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view("/regster_student", "Admin.Register_Student")->name("regster_student");
Route::view("/Student_Grades", "Admin.Student_Grades")->name("Student_Grades");


//  Catogries page

// Route::view("/Get_All_Cat","Admin.Catogries.Get_All_Cat")->name("Get_All_Cat");
Route::get("Get_All_Cat", function () {
    $data = DB::table("catogries")->get();
    return view("Admin.Catogries.Get_All_Cat", ["data" => $data]);
})->name("Get_All_Cat");
Route::view("/Setting_Cat", "Admin.Catogries.Setting_Cat")->name("Setting_Cat");


//  Library page

Route::view("/Get_All_library", "Admin.Library.Get_All_library")->name("Get_All_library");
Route::view("/Setting_Library", "Admin.Library.Setting_Library")->name("Setting_Library");


Route::post("/add", function (Request $request) {
    //  return $request;
    DB::table("catogries")->insert(["name" => $request->name]);
    return to_route("Get_All_Cat");
})->name("Add");
