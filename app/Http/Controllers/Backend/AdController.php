<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Ad;


class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads=Ad::all();
        return view('backend.ads.index',compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ads.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ad=new Ad();
        $ad->company=$request->company;
        $ad->ads_category=$request->ads_category;
        $ad->link=$request->link;
        $ad->slug=Str::slug($request->company);
        if($request->hasFile('image'))
        {
            $file=$request->image;
            $newname=time() . $file->getCLientOriginalName();
            $file->move("images",$newname);
            $ad->image="images/$newname";
        }
        $ad->save();
        toast('Your category is saved!','success');
        return redirect('/ad');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad=Ad::find($id);
        return view('backend.ads.edit',compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ad=Ad::find($id);
        $ad->company=$request->company;
        $ad->ads_category=$request->ads_category;
        $ad->link=$request->link;
        $ad->slug=Str::slug($request->company);
        if($request->hasFile('image'))
        {
            $file=$request->image;
            $newname=time() . $file->getCLientOriginalName();
            $file->move("images",$newname);
            $ad->image="images/$newname";
        }
        $ad->update();
        toast('Your category is updated!','success');
        return redirect('/ad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad=Ad::find($id);
        $ad->delete();
        toast('Your category is deleted!','success');
        return redirect('/ad');
    }
}
