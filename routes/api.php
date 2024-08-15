<?php

use App\Http\Controllers\SubjectController;
use App\Models\Catogry;
use App\Models\News;
use App\Models\Register_student;
use App\Models\Stetting;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

    // Catogry::all();
   $data =  DB::select("SELECT id,name FROM `subjects` WHERE id_catogry = $id");
    return response()->json(["status" => 200, "data" => $data]);
});
/*
| @method post
| @route /Regster-student
| @des   regster new student
*/
Route::post('/Regster-student', function (Request $req) {
    // return response()->json(["massge" =>  $req->all() ]);


    $D = Register_student::where("number_GOV", $req->number_GOV)
        ->first();

    if ($D) {
        return response()->json(["status" => 400, "massge" => "قدتم ارسال طلبك باالفعل"]);
    } else {
        
        
        // TODO uploade img
        $img_hith_lev_path = $req->file('img_hith_level')->store('', 'Img_Hith_Level');
        $img_bir_path = $req->file('img_birth')->store('', 'Img_Birth');
        // $img_bir_path = "0req->file('img_birth')->store('', 'Img_Birth')";
        

        $data = Register_student::create([
            'name' => $req->name,
            'number_GOV' => $req->number_GOV,
            'number_Rigstration' => $req->number_Rigstration,
            'number_ID' => $req->number_ID,
            'genders' => $req->genders,
            'nationality' => $req->nationality,
            'address' => $req->address,
            'name_mather' => $req->name_mather,
            'nationality_mather' => $req->nationality_mather,
            'img_birth' => $img_bir_path,
            'img_hith_level' => $img_hith_lev_path,
            'type_s' => $req->type_s,
            'rate' => $req->rate,
            'number_phone' => $req->number_phone,
            'type_blood' => $req->type_blood,
            'type_hith_level' => $req->type_hith_level,
            'type_RR' => $req->type_RR,
        ]);
        return response()->json(["status" => 200, "data" => $data]);
    }
});

/*
| @method get
| @route /Get-Register
| @des   Shose the Register student is open or close
*/
Route::get("/Get-Register", function () {
    $data = Stetting::first("isOpenRegister");
    return response()->json(["status" => 200, "data" => $data]);
});
/*
| @method get
| @route /Get-Status-Register-student
| @des   Shose the Register student is ture or false or wait 
*/
Route::get("/Get-Status-Register-student/{id}", function ($id) {
    $data = Register_student::where("id", $id)->first();
    return response()->json(["status" => 200, "data" => $data]);
});
/*
| @method get
| @route /Get-All-News
| @des   Get all data Table News
*/
Route::get("/Get-All-News", function(){
    $data = News::orderBy("id","desc")->get();
    return response()->json(["status" => 200, "data" => $data]);
});
/*
| @method get
| @route /Open-books
| @des   Open Books
*/
Route::get("/Open-books/{id}", [SubjectController::class,"viewPdf"]);
