<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyPostRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Image;
class CompanyController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $companies=Company::where('active',1)->paginate(10);
        return view('company.index',compact('companies'));
    }
    /**
     * Show the form for creating a new resource.

     */
    public function create()
    {
        return view('company.create');
    }
    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit(Company $company)
    {

        return view('company.edit',compact('company'));
    }
    /**
     * Remove the specified resource in storage.

     */
    public function destroy(Company $company)
    {

        $company->delete();
        return redirect()->route('company.index')->with('success', 'Company deleted Successfully');
    }
    /**
     * Update the specified resource in storage.

     */
    public function update(Company $company,CompanyPostRequest $request)
    {
        if ($request->file('logo') != null ) {
            $date = Carbon::now()->micro;
            $ext = explode('.', $request->file('logo')->hashName());
            $path=$request->file('logo')->storeAs(
                'attachment', $date .'.'. $ext[1]
            );

            $image=new Image();
            $image->image='/storage/app/'.$path;
            $image->save();
        }

            $company->name=$request->name;
            $company->email=$request->email;
            if (isset($image))
                $company->image_id=$image->id;
            $company->save();


        return redirect()->route('company.index')->with('success', 'Company Updated Successfully');

    }
    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(CompanyPostRequest $request)
    {
        if ($request->file('logo') != null ) {
            $date = Carbon::now()->micro;
            $ext = explode('.', $request->file('logo')->hashName());
            $path=$request->file('logo')->storeAs(
                'attachment', $date .'.'. $ext[1]
            );

            $image=new Image();
            $image->image='/storage/app/'.$path;
            $image->save();
        }

            $company=new Company();
            $company->name=$request->name;
            $company->email=$request->email;
            if (isset($image))
            $company->image_id=$image->id;
            $company->save();


        return redirect()->route('company.index')->with('success', 'Company Created Successfully');
    }
    /**
     * Update the specified resource in storage.

     */
    public function deactivate($id)
    {
       $company= Company::findOrFail($id);
       $company->active=0;
       $company->save();
        return redirect()->route('company.index')->with('success', 'Company Deactivated Successfully');


    }
}
