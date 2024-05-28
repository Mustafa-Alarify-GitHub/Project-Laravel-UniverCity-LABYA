<?php

use App\Models\Catogry;
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
// 