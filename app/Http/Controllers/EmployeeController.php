<?php

namespace App\Http\Controllers;
use App\Models\Employee;
USE App\Services\EmployeeService;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function navbar ()
    {
        return view('navbar');
    }
    public function employee()
    {
        return view('add_employee');
    }
    public function database(Request $request)
    {
        $request = Employee::all();
        return view('employee_details',['request' => $request]);
    }
    public function store(Request $request)
    {
        $input=$request->all();
        $image=$request->file('image');
        $filename    = time().$image->getClientOriginalName();
        $destinationPath = public_path('/category/images/');
        $image->move($destinationPath, $filename);
        $input['image']=$filename;
        EmployeeService::create($input);
        return redirect()->action([EmployeeController::class, 'database']);
    }
    public function edit($id , Employee $employee)
    {
        $data =    Employee::where('id',$id)->first();
        return view('edit_employee',compact('data'));
    }
    public function update(Request $request ,$id)
    {
        $input = $request->except(['_method', '_token', 'proengsoft_jsvalidation']);

        $image=$request->file('image');
        $filename    = time().$image->getClientOriginalName();
        $destinationPath = public_path('/category/images/');
        $image->move($destinationPath, $filename);
        $input['image']=$filename;

       $employee = EmployeeService::update($input,$id);

       return redirect()->action([EmployeeController::class, 'database']);
    }
    public function destroy($id)
    {
        $data =   Employee::whereId($id)->delete();

        return redirect()->action([EmployeeController::class, 'database']);
    }
    // public function salary()
    // {


    //     return view('emp_salary');

    // }



}
