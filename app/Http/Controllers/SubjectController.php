<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Catogry;
use Illuminate\Support\Facades\DB;
class SubjectController extends Controller
{
    public function index(){
        $data = Catogry::all();
        $subj=Subject::all();
        return view("Admin.Library.Setting_Library", ["data" => $data,"subj" => $subj]);

        // return "dhdhdhhdh";
    
    }


    public function store(Request $request){
        $file_path=$request->file('namefile')->store('','Filename');

        $catogry = Subject::create([
            'name'=>$request->bookname,
            'src_bdf'=>'/file_subject'.'/'.$file_path,
            'id_catogry'=>$request->cat,


        ]);

        return redirect()->route("Setting_Library");
    }

    public function showsubject($id)
    {
        $data = Catogry::all();
        $subj = DB::table('subjects')->where("id_catogry",$id)->get();

   
        return view("Admin.Library.Setting_Library",["subj"=>$subj,"data" => $data]);

        // return $data;

    }

    public function delete($id)
    {

        $data = Catogry::all();
        $subj=Subject::all();
        $subjtt = Subject::find($id);
        $subjtt->delete();
        return view("Admin.Library.Setting_Library",["subj"=>$subj,"data" => $data]);

        // return $data;

    }
}
