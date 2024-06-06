<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Position;
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

    public function create()
    {
        return view('admin.employees.create');;
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'email' => 'required|email|unique:employees',
            'position_id' => 'required|exists:positions,id'
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.create')->alert('sukses! data berhasil diedit ');
    }

    public function delete(string $id)
    {
        $employees = Employee::find($id);
        $employees->delete();

        return redirect()->route('employees.index');
    }

    public function edit(string $id)
    {
        $employee = Employee::find($id);
        $positions = Position::all();
        return view('admin.employees.edit', compact('employee', 'positions'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required',
            'email' => 'required|email|unique:employees,email,'.$id,
            'nohp' => 'required|string|max:15',
            'positions_id' => 'required|exists:positions,id',
        ]);

        $employee = Employee::find($id);
        $employee->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee berhasil diperbarui');
    }
}