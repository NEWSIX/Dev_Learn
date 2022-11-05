<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DerpartmentController extends Controller
{
    public function index(){
        return view('Admin.Department.index');
    }

    public function store(Request $request){
       // dd($request->department_name);
        $request->validate([
            'department_name' => 'required|unique:departments|max:25'
        ],
        [
            'department_name.required'=>'We need infomation!',
            'department_name.max'=>"We don't need you infomation!",
            'department_name.unique' => 'Your infomation is useless! '
        ]
    );

    $data = array();
    $data["department_name"] = $request->department_name;
    $data["user_id"] = Auth::user()->id;
    DB::table('departments') -> insert($data);

/*
    $department = new Department;
    $department-> department_name = $request->department_name;
    $department-> user_id = Auth::user()->id;

    $department->save();
*/
    return redirect()->back()->with('success',"completely!");
    }
}
