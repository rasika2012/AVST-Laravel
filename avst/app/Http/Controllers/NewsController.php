<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function getNews(){
        $news=News::all();
        return view('welcome',['items'=>$news->reverse()]);
    }
    public function setNews(Request $request){
        $news= new News();
        $news->news=$request->input("news");
        $news->caption=$request->input("topic");
        $news->save();
        return response()->json( ['msg'=>$news],201);
    }


    public function deleteNews( $id){
        $news=(new \App\News())->find($id);
        $news->delete();
        return redirect("/");

    }
}
