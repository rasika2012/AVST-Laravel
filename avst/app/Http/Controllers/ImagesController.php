<?php

namespace App\Http\Controllers;

use App\images;
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
        $image->location = $request->input('location');
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
        return view('all_images',['items'=>$allItem]);
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


    public function search($search) {


        $images = images::where('location', 'LIKE', '%' . $search . '%')->limit(10)->get();
        return response()->json(['all'=>$images]);


    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getImages($location){
       // $location = "rathnapura";
       // $users = (new \App\images())->select('location')->get();
        $images = (new \App\images())->select('*')->where('location' , $location)->get();
        //$images = images::select('select * from images where location = '.$location, [1]);
        return response()->json(['hi'=>$images]);
    }


}
