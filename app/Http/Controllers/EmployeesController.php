<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
    public function __construct()
    {
        //
    }

    // Return all employees
    public function showAllEmployees(){
        return json_encode(Employee::all());
    }

    //Return employee by id
    public function showEmployeeById($id){
        return json_encode(Employee::find($id));
    }

    public function create(Request $request){
        $empl = Employee::create($request->all());
        return response()->json($empl);
    }

    public function update($id, Request $request){
        $toUpdate = Employee::find($id);
        $toUpdate->name = $request->name;
        $toUpdate->company_id = $request->company_id;
        $toUpdate->save();
        return response()->json($toUpdate);
    }

    public function delete($id){
        Employee::find($id)->delete();
        return response("Delete done!");
    }
}
