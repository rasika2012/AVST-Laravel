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
    public function getAllUnit(){
        $units =  (new \App\units())->all();
        return $units; //response(['allUnit'=>$units]);//->json(['allUnit'=>$units]);

    }
    public function addUnit(Request $request){
        if($request->input('location')!=null){
            $unit =  (new \App\units());
            $unit->location = $request->input('location');
            $unit->max_speed = $request->input('max_speed');
            $unit->longitude = $request->input('longitude');
            $unit->latitude = $request->input('latitude');
            $unit->altitude = $request->input('altitude');
            $unit->save();
        }

        return redirect('./addunit');
    }
}
