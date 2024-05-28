<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{
    public function index(){
        $news = News::all();
        return   $news;
    
    }
    public function create(Request $request){
        $image_path=$request->file('nameimage')->store('','Images');

        $news = News::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'img'=>'/image_news'.'/'.$image_path,
        ]);

        return   $news;
    }





    public function delete($id)
    {
        $news = News::find($id);
        $news->delete();
        return   $news;
    }
}
