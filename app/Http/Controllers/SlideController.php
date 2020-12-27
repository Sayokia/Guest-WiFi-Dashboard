<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userStoreID = Auth::user()->sid;
        $slide = DB::table("slides")
        ->where('sid','=',$userStoreID)
        ->count();

        $count = $slide;


        
        return view('carousel/slide',['slides_count'=> $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // solution referred to https://learnku.com/laravel/t/35579
        $file = $request->img;
        $sid = $request->sid;
        $folder_name = "uploads/images/carousel/" . $sid;
        $upload_path = public_path() . '/' . $folder_name;
        $extension  =  strtolower($file->getClientOriginalExtension())  ?:  'png';
        $filename = $sid . '_' . time() . '.' . $extension;
        $file->move($upload_path, $filename);

        $slide = new Slide;
        $slide->sid = $sid;
        $slide->img = $folder_name . '/' . $filename;

        $slide->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->slide_id;
        $url = $request->delete_img;
        $path = public_path() . '/' . $url;
@unlink($path);

        $slide = DB::table("slides")
        ->where('id','=',$id)
        ->delete();
        
        return redirect()->back();
    }
}