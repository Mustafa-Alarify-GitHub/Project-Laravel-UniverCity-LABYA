<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{
    public function index(){
        $news = News::all();
        return view("News", ["news" => $news]);
    
    }
    public function create(Request $request){
        // $image_path=$request->file('nameimage')->store('','Images');

        $imageData = $request->file('nameimg')->get();



$news = new News;
$news->body=$request->bodydescrtion;
$news->img =$imageData;
$news->save();

        // $news = News::create([
        //     'body'=>$request->body,
        //     'img'=>'/image_news'.'/'.$image_path,
        // ]);

        return redirect()->route("get_news");
    }





    public function delete($id)
    {
        $news = News::find($id);
        $news->delete();
        return   $news;
    }







    public function showImage($id)
{

    $imageData = News::findOrFail($id)->img;

    return response($imageData)
        ->header('Content-Type', 'image/jpeg'); 
}
}
