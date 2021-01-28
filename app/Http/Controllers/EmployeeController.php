<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeePostRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Image;
class EmployeeController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $employees=Employee::paginate(10);
        return view('employee.index',compact('employees'));
    }
    /**
     * Show the form for creating a new resource.

     */
    public function create()
    {
        $companies=Company::where('active',1)->get();

        return view('employee.create',compact('companies'));
    }
    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit(Employee $employee)
    {
        $companies=Company::where('active',1)->get();
        return view('employee.edit',compact('employee','companies'));
    }
    /**
     * Remove the specified resource in storage.

     */
    public function destroy(Employee $employee)
    {

        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'Employee deleted Successfully');
    }
    /**
     * Update the specified resource in storage.

     */
    public function update(Employee $employee,EmployeePostRequest $request)
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


        $employee->first_name=$request->first_name;
        $employee->last_name=$request->last_name;
        $employee->phone=$request->phone;

        $employee->email=$request->email;
        if (isset($image))
            $employee->image_id=$image->id;

        $employee->company_id=$request->company;
        $employee->save();


        return redirect()->route('employee.index')->with('success', 'Employee Updated Successfully');

    }
    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(EmployeePostRequest $request)
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

        $employee=new Employee();

        $employee->first_name=$request->first_name;
        $employee->last_name=$request->last_name;
        $employee->phone=$request->phone;

        $employee->email=$request->email;
        if (isset($image))
            $employee->image_id=$image->id;

        $employee->company_id=$request->company;
        $employee->save();


        return redirect()->route('employee.index')->with('success', 'Employee Created Successfully');
    }
    /**
     * Update the specified resource in storage.

     */
    public function deactivate($id)
    {
        $employee= Employee::findOrFail($id);
        $employee->active=0;
        $employee->save();
        return redirect()->route('employee.index')->with('success', 'Employee Deactivated Successfully');


    }
}
