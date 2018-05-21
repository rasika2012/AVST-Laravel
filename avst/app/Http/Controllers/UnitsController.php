<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class UnitsController extends Controller
{
    public function getlocation( $id ){
        $unit = (new \App\units())->find($id);
        return response()->json(['unit'=>$unit]);
    }
    public function getlocationName( $id ){
        $unit =units::where('unitId', 'LIKE', '%' . $id. '%')->limit(1)->get();
        return $unit;
    }
    public function getAllUnit(){
        $units =  (new \App\units())->all();
        return view('Locations',['items'=>$units]);
        //return $units; //response(['allUnit'=>$units]);//->json(['allUnit'=>$units]);

    }
    public function addUnit(Request $request){
        if($request->input('location')!=null){
            $unit =  (new \App\units());
            $unit->location = $request->input('location');
            $unit->max_speed = $request->input('max_speed');
            $unit->longitude = $request->input('longitude');
            $unit->latitude = $request->input('latitude');
            $unit->unitId = $request->input('unitId');
            $unit->save();
        }

        return redirect('./addunit');
    }
    public function deleteUnit($id){
        //$imgs=new Imag();
        $unit= (new \App\Units())->find($id);
        if($unit){
            $unit->delete();
            $path = $unit->path;

            return redirect('getAllUnits');
        }else{
            return redirect('getAllUnits');

        }


    }

}
