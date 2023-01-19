<?php
namespace App\Services;

use App\Models\EmployeesSalary;
use Illuminate\Http\Request;


class EmployeeSalaryService{

    public static function create(array $data)
    {
        $details = EmployeesSalary::create($data);
        return $details;
    }
    public static function update(array $data,$id)
    {


        $data=EmployeesSalary::whereId($id)->update($data);
        return $data;

    }


    public static function delete(EmployeesSalary $employeesalary)
    {
      $data = $employeesalary->delete();
      return  $data;

    }
    public static function avarge($id)
    {
            $data=EmployeesSalary::where('employees_id',$id)->avg('net_salary');
            return $data;
    }



}
