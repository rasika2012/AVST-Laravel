<?php

namespace App\Http\Controllers;

use App\images;
use Illuminate\Http\Request;

class ImagesController extends Controller
{

    //save image to the data base and storange
    public function ImageAdd(Request $request)
    {

        $explote = explode(',', $request->image);
        $decode = base64_decode($explote[1]);
        $explote1 = explode('/', $explote[0]);
        $explote2 = explode(';', $explote1[1]);
        $extention = $explote2[0];
        $time = microtime();
        $fileName = $time . '.' . $extention;
        $filePath = public_path() . '/' . $fileName;
        file_put_contents($filePath, $decode);




        $image=(new \App\images());
        $image->speed = $request->input('speed');
        $image->location = $request->input('location');
        $image->image = $fileName;
        $image->save();
        // return view('uploadimg', ['items' => $image]);
        return response()->json(['msg' => $image], 201);

        // return view('uploadimg', ['items' => 'null']);

    }



    public function returnAll()
    {
        $allItem = images::all();
        return view('all_images', ['items' => $allItem]);

    }


    /**
     * @param $id
     * @throws \Exception
     */
    public function deleteImage($id)
    {
        //$imgs=new Imag();
        $imgs = (new \App\images())->find($id);
        if ($imgs) {
            $imgs->delete();
            $path = $imgs->path;
            //  unlink(public_path().'/'.$path);
            return redirect('allimges');

        } else {
            return redirect('allimges');
        }


    }


    public function search($search)
    {

        // Sets the parameters from the get request to the variables.

        //$hasCoffeeMachine =$request->input('search');

        //  $result= Imag::all();//Imag::where('path','like',$search)->orWhere('name', 'like', $search)->get();


        $images = images::where('location', 'LIKE', '%' . $search . '%')->limit(10)->get();
        return response()->json(['all'=>$images]);

        //return view('path/location/id', compact('lacation'));
        /*   $columns = [];

           $query = (new \App\Imag)->select('*');

           foreach($columns as $column)
           {
           $query->where($column, '=', $search);
           }

           $models = $query->get();
           return response()->json(['all'=>$models]);

           */

    }
}
