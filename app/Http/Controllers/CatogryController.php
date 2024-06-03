<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catogry;

class CatogryController extends Controller
{
    public function index(){
        $data = Catogry::all();
        $count = Catogry::all()->count();
        return view("Admin.Catogries.Get_All_Cat", ["data" => $data,"count"=>$count]);

    
    }
    public function create(Request $request){

        $request->validate([
            "name"=> "required|string|min:3",
        ]);
        
        $catogry = Catogry::create([
            'name'=>$request->name
        ]);

        return redirect()->route("Get_All_Cat");
    }


    public function edit(Request $req, $id)
    {
        $catogry = Catogry::find($id);

                $catogry->name = $req->name;
                $catogry->save();
        return redirect()->route('Get_All_Cat');
    }


    public function delete($id)
    {
        $cat = Catogry::find($id);
        $cat->delete();
        return redirect()->route('Get_All_Cat');
    }

    public function Search(){


        $catogrysearch=Catogry::latest();
        if(request('search')){
            $catogrysearch->where('name','LIKE','%'. request('search') .'%');
        }
        return view('pageSerch',['data'=> $catogrysearch->get()]);
    }

}
