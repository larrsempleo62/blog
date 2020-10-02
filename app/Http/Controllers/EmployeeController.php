<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;
use App\Employee;

class EmployeeController extends Controller
{
    public function index () {
    
        // $employees =  DB::table('employees')->get();
        // $employees = Employee::all();
        // $employees = Employee::where('name','brye')->get();
        $employees = Employee::where('salary','>',6000)->get();
        return view('employees.index', compact('employees'));
    }
}