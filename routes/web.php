<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeesSalaryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[EmployeeController::class ,'employee']);
Route::get('database',[EmployeeController::class ,'database']);
Route::post('store',[EmployeeController:: class,'store']);
Route::get('edit/{id}',[EmployeeController:: class,'edit']);
Route::put('update/{id}',[EmployeeController:: class,'update']);
Route::get('delete/{id}',[EmployeeController:: class,'destroy']);

// Route::get('userSearch',[EmployeeController:: class,'search']);
Route::get('navbar', [EmployeeController::class, 'navbar'])->name('navbar');

// EmployeesSalaryController
Route::get('insert_salary',[EmployeesSalaryController::class ,'add_salary']);
Route::post('sal_store',[EmployeesSalaryController:: class,'sal_store']);
Route::get('salary_database',[EmployeesSalaryController::class ,'salary_database']);
Route::get('saledit/{id}',[EmployeesSalaryController:: class,'sal_edit']);
Route::put('salupdate/{id}',[EmployeesSalaryController:: class,'sal_update']);
Route::get('delete/{id}',[EmployeesSalaryController:: class,'sal_destroy']);


// Route::post('emp_salary', [EmployeeController::class, 'fetchSalary']);
 