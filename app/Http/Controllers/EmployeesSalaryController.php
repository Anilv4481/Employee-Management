<?php
namespace App\Http\Controllers;
use App\Models\EmployeesSalary;
USE App\Services\EmployeeSalaryService;

use Illuminate\Http\Request;

class EmployeesSalaryController extends Controller
{

    public function add_salary()
    {
        return view('salary/add_salary');
    }
    public function salary_database(Request $request)
    {

        $search= $request['search'] ?? "";
        if($search !=""){
            $request = EmployeesSalary::where('employees_name','=',$search)->get();
        }else{

            $request = EmployeesSalary::all();
        }

        return view('salary/salary_details',['request' => $request,"search"=>$search]);
    }
    public function sal_store(Request $request)
    {
        $input=$request->all();
        EmployeeSalaryService::create($input);
        return redirect()->action([EmployeesSalaryController::class,'salary_database']);
    }
    public function sal_edit($id ,EmployeesSalary $employeesalary)
    {

        $data =    EmployeesSalary::where('id',$id)->first();
        return view('salary/edit_salary',compact('data'));
    }
    public function sal_update(Request $request ,$id)
    {

        $input = $request->except(['_method', '_token', 'proengsoft_jsvalidation']);
        $employee = EmployeeSalaryService::update($input,$id);

        return redirect()->action([EmployeesSalaryController::class, 'salary_database']);
    }
    public function sal_destroy($id)
    {
        $data =   EmployeesSalary::whereId($id)->delete();

        return redirect()->action([EmployeesSalaryController::class, 'salary_database']);
    }
    public function search(Request $request)
    {

        // EmployeesSalary::whereLike('employees_name', $searchTerm)->get();
        // EmployeesSalary::query()
        // ->where('name', 'LIKE', "%{$searchTerm}%")->get();
        $query = EmployeesSalary::query();


        if(request->ajax()){
            $employees_salaries=$query->where('employees_name','like','%'.$request->search.'%')->get();
            return  response()->json(['employees_salaries'=>$employees_salaries]);
        }
        // else
        // {
        //     $employees_salaries = EmployeesSalary::query();
        //     return view('emp_salary ', compact('employees_salaries'));
        // }


    }
   

}
