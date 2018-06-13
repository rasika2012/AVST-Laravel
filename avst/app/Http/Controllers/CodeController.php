<?php

namespace App\Http\Controllers;
use App\Code;
use Illuminate\Http\Request;

class CodeController extends Controller
{
    public function getCodes(){
        $code=Code::all()->slice(-1,1);
        return view('uploadimg',['items'=>$code->reverse()]);
    }

    public function uploadCode(Request $request){
        $code= new Code();
        $code->code=$request->input("code");
        $code->comment=$request->input("comment");
        $code->version="demo";
        $code->author="NOT DEFINED";
        $code->save();
        return $this->getCodes();
        //return redirect("/addNew");
    }


    public function getCode(){
        $code= Code::all()->slice(-1,1);
        foreach ($code as $newCode){
            return  $newCode;
        }


    }
}
