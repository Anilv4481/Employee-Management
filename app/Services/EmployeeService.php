<?php
namespace App\Services;

use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeeService{

    public static function create(array $data)
    {
        $details = Employee::create($data);
        return $details;
    }
    public static function update(array $data,$id)
    {


        $data=Employee::whereId($id)->update($data);
        return $data;

    }


    public static function delete(Employee $employee)
    {
      $data = $employee->delete();
      return  $data;

    }

    public static function fetchCountry()
    {
        $employee = Employee::get(["name", "id"]);
       $data['employee']=$employee;

        return $data;
    }


}
