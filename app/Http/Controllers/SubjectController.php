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
        $count_subj=Subject::count();
        $count_cat=Catogry::count();
        return view("Admin.Library.Setting_Library",
         ["data" => $data,"subj" => $subj,"c1"=>$count_subj,"c2"=>$count_cat]);


    
    }


    public function store(Request $request){

        // $imageData = file_get_contents($request->file('namefile')->getRealPath());
        // $image = $request->file('namefile');
        // $imageData = base64_encode(file_get_contents($image));
        // $file_path=$request->file('namefile')->store('','Filename');
        $fileData = $request->file('namefile')->get();
        $count_subj=Subject::count();
        $count_cat=Catogry::count();
        if ($request->hasFile('namefile')) {

        $sub = new Subject;
        $sub->name=$request->bookname;
        $sub->src_bdf =$fileData;
        $sub->id_catogry=$request->cat;
        $sub->save();
        return redirect()->route("Setting_Library");
    }
            return "لم يتم رفع أي ملف";  

            
        
    
    }

    public function showsubject($id)
    {
        $data = Catogry::all();
        $subj = DB::table('subjects')->where("id_catogry",$id)->get();
        $count_subj=Subject::count();
        $count_cat=Catogry::count();
   
        return view("Admin.Library.Setting_Library",["subj"=>$subj,"data" => $data,"c1"=>$count_subj,"c2"=>$count_cat]);

        // return $data;

    }

    public function delete($id)
    {

      Subject::find($id)->delete();
        return to_route("Setting_Library");
    }

    public function Search(){

        $count_subj=Subject::count();
        $count_cat=Catogry::count();
        $subjectsearch=Subject::latest();
        $data = Catogry::all();
        if(request('search')){
            $subjectsearch->where('name','LIKE','%'. request('search') .'%');
        }
        return view('pageSearchLibrary',['subj'=> $subjectsearch->get(),"data"=>$data,"c1"=>$count_subj,"c2"=>$count_cat]);
    }


    public function viewPdf($id)
{
    $pdfData = Subject::findOrFail($id)->src_bdf;
    return response($pdfData)
        ->header('Content-Type', 'application/pdf')
        ->header('Content-Disposition', 'inline; filename="filename.pdf"');
}
}
