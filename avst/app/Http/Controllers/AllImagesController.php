<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllImagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        //
        $text1 = "Test bvbvb";
        return view('all_images', ['name' => $text1]);
    }

    public function getImgs()
    {
        return "sdd";
    }
}
