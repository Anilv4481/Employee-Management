<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesSalary extends Model
{
    use HasFactory;
    protected $fillable = [
        'employees_id',
        'employees_name',
        'designation',
        'location',
        'gender',
        'leave',
        'day_payable',
        'month',
        'net_salary',
    ];
}
