<?php

namespace App\Http\Controllers;

use App\images;
use App\units;
use Faker\Provider\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    //save image to the data base and storange
    public function ImageAdd(Request $request){

        $explote = explode(',',$request->image);
        $decode = base64_decode($explote[1]);
        $explote1=explode('/',$explote[0]);
        $explote2=explode(';',$explote1[1]);
        $extention =$explote2[0];
        $time = time();
        $fileName = $time . '.' . $extention;
        $filePath = public_path().'/'.$fileName;
        file_put_contents($filePath,$decode);





        $image=(new \App\images());
        $image->speed = $request->input('speed');
        $location_details = units::where('unitId', 'LIKE', '%' . $request->input('location'). '%')->limit(1)->get();
        $image->location=$location_details[0]->location;
        $image->image = $fileName;
        $image->save();

        return response()->json( ['msg'=>$image],201);
    }


    public function returnAll(){
      /*  if(!\Auth::check()){
            return view('home');
        }
*/

        $allItem=images::all();
        //$allItem=images::orderBy('id','desc');
       //$revAllItem=array_reverse($allItem);
         return view('all_images',['items'=>$allItem->reverse()]);
    }


    /**
     * @param $id
     * @throws \Exception
     */
    public function deleteImage($id){
        //$imgs=new Imag();
        $imgs= (new \App\images())->find($id);
        if($imgs){
            $imgs->delete();
            $path = $imgs->path;
            //  unlink(public_path().'/'.$path);
            return redirect('allimges');
            //return response()->json(["msg"=>"ok"]);
        }else{
            return redirect('allimges');
            //return response()->json(["msg"=>"no img"]);
        }


    }

    public function getLocation(Request $request) {
        $images = images::where('location', 'LIKE', '%' . $request->input('searchText') . '%')->limit(10)->get();
        return view('all_images',['items'=>$images->reverse()]);
        //return response()->json(["msg"=>$images]);
    }

    public function search($search) {


        $images = images::where('location', 'LIKE', '%' . $search . '%')->limit(10)->get();
        return response()->json(['all'=>$images]);


    }
    public function ImageAdd1(Request $request){
/*
        $explote = explode(',',$request->image);
        $decode = base64_decode($explote[1]);
        $explote1=explode('/',$explote[0]);
        $explote2=explode(';',$explote1[1]);
        $extention =$explote2[0];
        $time = time();
        $fileName = $time . '.' . $extention;
        $filePath = public_path().'/'.$fileName;
        file_put_contents($filePath,$decode);



*/

        $image=(new \App\images());
        $image->speed = $request->input('speed');
        $image->location = $request->input('location');
        $image->image = $request->image;
        $image->save();

        return view("test");//->json( ['msg'=>$image],201);
    }


}
