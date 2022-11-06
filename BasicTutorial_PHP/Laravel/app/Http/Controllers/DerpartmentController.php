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

        $department = Department::paginate(5,['*'],'department');
        $trashDepartment =  Department::onlyTrashed()->paginate(2,['*'],'trashDepartment');
        /*
        $department = DB::table('departments')
        ->join('users','departments.user_id','users.id')
        ->select('departments.*','users.name')->paginate(5);
        */
        //$department = DB::table('departments')->paginate(2);
        //$department = Department::paginate(3);
       //$department = DB::table('departments')->get();
        //$department = Department::all();
        return view('Admin.Department.index',compact('department','trashDepartment'))->with(compact('department','trashDepartment'));

    }

    public function softdelete($id){
        $department = Department::find($id);
        $department->delete();
        return redirect()->route('department')->with('success',"delete --> ".$department -> department_name);
    }

    public function edit($id){
        $department = Department::find($id);
        return view('Admin.Department.edit',compact('department'));
    }

    public function update(Request $request , $id){
        $request->validate([
            'department_name' => 'required|unique:departments|max:25'
        ],
        [
            'department_name.required'=>'We need infomation!',
            'department_name.max'=>"We don't need you infomation!",
            'department_name.unique' => 'Your infomation is useless! '
        ]);
        $oldData = Department::find($id)->department_name;
        $newData = $request->department_name;
        //dd(Department::find($id)->department_name);
        $updated = Department::find($id)->update([
            'department_name' => $request->department_name ,
            'user_id' => Auth::user()->id ,
        ]);
        return redirect()->route('department')->with('success',$oldData." --> ".$newData);
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
    return redirect()->back()->with('success',"completely! 🥳");
    }


    public function recovery($id){
        $recover = Department::withTrashed()->find($id);
        $recover ->restore();
        return redirect()->back()->with('success',"😷 recover --> ".$recover->department_name);

    }
    public function delete($id){
        $recover = Department::withTrashed()->find($id);
        $recover ->forceDelete();
        return redirect()->back()->with('success',$recover->department_name."is gone 🥺 ");

    }
}
