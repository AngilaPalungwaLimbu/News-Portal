<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $company=Company::first();
        return view('backend.company.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $company= new Company();
        $company->name=$request->name;
        $company->address=$request->address;
        $company->email=$request->email;
        $company->contact=$request->contact;
        if($request->hasFile('logo'))
        {
            $file=$request->logo;
            $newname=time() . $file->getCLientOriginalName();
            $file->move("images",$newname);
            $company->logo="images/$newname";
        }
        $company->save();
        return redirect('/company');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company=Company::find($id);
        return view('backend.company.edit',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company=Company::find($id);
        return view('backend.company.edit',compact('company'));

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
        $company= Company::find($id);
        $company->name=$request->name;
        $company->address=$request->address;
        $company->email=$request->email;
        $company->contact=$request->contact;
        if($request->hasFile('logo'))
        {
            $file=$request->logo;
            $newname=time() . $file->getCLientOriginalName();
            $file->move("images",$newname);
            $company->logo="images/$newname";
        }
        $company->update();
        return redirect('/company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company=Company::find($id);
        $company->delete();
        return redirect('/company');
    }
}
