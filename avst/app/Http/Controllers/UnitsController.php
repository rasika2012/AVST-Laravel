<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class UnitsController extends Controller
{
    public function getlocation( $id ){
        $unit = Unit::find($id);
        return response()->json(['unit'=>$unit]);
    }
    public function getAllUnit(){
        $units = Unit::all();
        return response()->json(['allUnit'=>$units]);

    }
    public function addUnit(Request $request){
        $unit = new Unit();
        $unit->location = $request->input('location');
        $unit->max_speed = $request->input('max_speed');
        $unit->longitude = $request->input('longitude');
        $unit->latitude = $request->input('latitude');
        $unit->altitude = $request->input('altitude');
        $unit->save();

    }
}
