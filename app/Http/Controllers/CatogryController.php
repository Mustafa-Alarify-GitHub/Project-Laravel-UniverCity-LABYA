<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catogry;

class CatogryController extends Controller
{
    public function index(){
        $data = Catogry::all();
        return view("Admin.Catogries.Get_All_Cat", ["data" => $data]);

    
    }
    public function create(Request $request){

        $catogry = Catogry::create([
            'name'=>$request->name
        ]);

        return redirect()->route("Get_All_Cat");
    }





    public function delete($id)
    {
        $cat = Catogry::find($id);
        $cat->delete();
        return redirect()->route('Get_All_Cat');
    }

}
