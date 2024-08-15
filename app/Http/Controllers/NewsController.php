<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view("News", ["news" => $news]);
    }
    public function create(Request $request)
    {
        $imageData = $request->file('nameimg')->store('', 'img_news');


        
        $news = new News;
        $news->body = $request->bodydescrtion;
        $news->img ="img_news/". $imageData;
        $news->save();


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
