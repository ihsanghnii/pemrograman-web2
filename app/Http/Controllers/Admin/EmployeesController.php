<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function index() 
    {
        // $employees = DB::select('SELECT * FROM employees');
        $employees = Employee::all();
        $employees = Employee::with('position')->get();
        // dd($employees);

        return view('admin.employees.index', compact('employees'));
    }
}