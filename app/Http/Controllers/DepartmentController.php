<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        $departments = \App\Department::all();
        return view('department.index', compact('departments'));
    }

    public function create(){
        return view('department.create');
    }
    public function store(){
        $data = request()->validate([
        'department_name'=>'required'
        ]);
        \App\Department::create($data);
        return redirect()->back()->with('alert', 'Department Added Successfully!');
          
    }
}
