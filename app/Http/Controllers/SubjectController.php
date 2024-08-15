<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Catogry;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function index()
    {
        $data = Catogry::all();
        $subj = Subject::all();
        return view("Admin.Library.Setting_Library", ["data" => $data, "subj" => $subj]);
    }


    public function store(Request $request)
    {

        // $imageData = file_get_contents($request->file('namefile')->getRealPath());
        // $image = $request->file('namefile');
        // $imageData = base64_encode(file_get_contents($image));
        // $file_path=$request->file('namefile')->store('','Filename');




        if ($request->hasFile('namefile')) {
            $fileData = $request->file('namefile')->get();
            $sub = new Subject;
            $sub->name = $request->bookname;
            // $sub->src_bdf = $fileData;
            $sub->id_catogry = $request->cat;
            $sub->save();
         
            return redirect()->route("Setting_Library");
        }
        return "لم يتم رفع أي ملف";
    }

    public function showsubject($id)
    {
        $data = Catogry::all();
        $subj = DB::table('subjects')->where("id_catogry", $id)->get();
        return view("Admin.Library.Setting_Library", ["subj" => $subj, "data" => $data]);
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

        $data = Catogry::all();
        $subj = Subject::all();
        $subjtt = Subject::find($id);
        $subjtt->delete();

        return redirect()->route("Setting_Library");
    }

    public function Search()
    {


        $subjectsearch = Subject::latest();
        $data = Catogry::all();
        if (request('search')) {
            $subjectsearch->where('name', 'LIKE', '%' . request('search') . '%');
        }
        return view('pageSearchLibrary', ['subj' => $subjectsearch->get(), "data" => $data]);
    }


    public function viewPdf($id)
    {
        $pdfData = Subject::findOrFail($id)->src_bdf;
        return response($pdfData)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="filename.pdf"');
    }
}
