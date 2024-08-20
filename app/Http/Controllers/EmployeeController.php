<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      //  $Employees = Employee::all(); // All records are fetch
        $Employees = Employee::paginate(5); // Records are fetch by pagination
        $data = compact('Employees');
        return view('employee.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
        ]);

        $objeEmp = new Employee();
        $objeEmp->name = $request['name'];
        $objeEmp->phone = $request['phone'];
        $objeEmp->email = $request['email'];
        $objeEmp->gender = $request['gender'];
        $objeEmp->save();

        return redirect()->route('employee.index')->with('success', 'Employee has been added');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $checkid = Employee::find($id);
        $data = compact('checkid');
        return view('employee.edit')->with($data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
        ]);

        $checkid = Employee::find($id);

        $checkid->name = $request['name'];
        $checkid->email = $request['email'];
        $checkid->phone = $request['phone'];
        $checkid->gender = $request['gender'];
        $checkid->save();
        return redirect()->route('employee.index')->with('success', 'Employee has been updated');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $checkid = Employee::find($id);
        $checkid->delete();
        return redirect()->route('employee.index')->with('success', 'Employee has been deleted');
    }
}
