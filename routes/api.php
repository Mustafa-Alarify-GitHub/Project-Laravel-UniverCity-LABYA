<?php

use App\Models\Catogry;
use App\Models\Register_student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
| @method GET
| @route  /get-all-catogries
| @des    Get all data from catogries
*/
Route::get('/get-all-catogries', function () {
    $data = Catogry::all();
    return response()->json(["status" => 200, "data" => $data]);
});
/*
| @method GET
| @route /get-books/{id}
| @des   Get Book by ID ()
*/
Route::get('/get-books/{id}', function ($id) {
    $data =  Subject::where("id_catogry", $id)->get();
    return response()->json(["status" => 200, "data" => $data]);
});
/*
| @method post
| @route /Regster-student
| @des   regster new student
*/
Route::post('/Regster-student', function (Request $req) {

    // TODO uploade img
    $img_hith_lev_path=$req->file('img_hith_lev')->store('','Img_Hith_Level');
    $img_bir_path=$req->file('img_bir')->store('','Img_Birth');

    $data =  Register_student::create([
        'name'=>$req->name,
        'number_GOV'=>$req->number_GOV,
        'number_Rigstration'=>$req->number_Rigstration,
        'number_ID'=>$req->number_ID,
        'genders'=>$req->genders,
        'nationality'=>$req->nationality,
        'address'=>$req->address,
        'name_mather'=>$req->name_mather,
        'nationality_mather'=>$req->nationality_mather,
        'img_birth'=>$req->img_birth,
        'img_hith_level'=>$req->img_hith_level,
        'type_s'=>$req->type_s,
        'rate'=>$req->rate,
        'number_phone'=>$req->number_phone,
        'type_blood'=>$req->type_blood,
        'type_hith_level'=>$req->type_hith_level,
        'type_RR'=>$req->type_RR,
    ]);
    return response()->json(["status" => 200, "data" => $data]);
});
