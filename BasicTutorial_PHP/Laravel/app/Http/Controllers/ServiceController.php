<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class ServiceController extends Controller
{
    public function index(){

        $service = Service::paginate(5,['*'],'service');
        /*Service
        $service = DB::table('services')
        ->join('users','services.user_id','users.id')
        ->select('services.*','users.name')->paginate(5);
        */
        //$service = DB::table('services')->paginate(2);
        //$service = service::paginate(3);
       //$service = DB::table('services')->get();
        //$service = service::all();
        return view('Admin.Service.index',compact('service'));

    }

    public function store(Request $request){
       // dd($request->service_name);
      // dd($request->service_image);
        $request->validate([
            'service_name' => 'required|unique:services|max:25',
            'service_image' => 'required|mimes:jpg,jpeg,png'
            ],
            [
                'service_name.required'=>'We need infomation!',
                'service_name.max'=>"We don't need you infomation!",
                'service_name.unique' => 'Your infomation is useless! ',
                'service_image.required' => 'Where ur Image ?', 
            ]
        );

       $service_image = $request->file('service_image');

       $name_genarate = hexdec(uniqid());

       $image_ext = strtolower($service_image->getClientOriginalExtension());
       $image_name = $name_genarate.'.'.$image_ext;

       
       $upload_location = 'image/services/';
       $full_path = $upload_location.$image_name;

        

        Service::insert([
            'service_name'=>$request->service_name,
            'service_image' => $full_path,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $service_image -> move($upload_location,$image_name);

        return redirect()->route('service')->with('success',$request->service_name." --> ".$full_path);
    }


    public function edit($id){
        $service = Service::find($id);
        return view('Admin.service.edit',compact('service'));
    }

    public function update(Request $request , $id){

        $request->validate([
            'service_name' => 'required|max:25',
            'service_image' => 'mimes:jpg,jpeg,png'
            ],
            [
                'service_name.required'=>'We need infomation!',
                'service_name.max'=>"We don't need you infomation!",
                'service_name.unique' => 'Your infomation is useless! ',
            ]
        );

        $service_image = $request->file('service_image');

        $name_genarate = hexdec(uniqid());

        $image_ext = strtolower($service_image->getClientOriginalExtension());
        $image_name = $name_genarate.'.'.$image_ext;

        
        $upload_location = 'image/services/';
        $full_path = $upload_location.$image_name;



        $old_image = $request -> old_image;
        @unlink($old_image);

        $oldData = Service::find($id)->service_name;
        $newData = $request->service_name;
        //dd(service::find($id)->service_name);
        Service::find($id)->update([
            'service_name' => $request->service_name ,
            'service_image' => $full_path ,
            'updated_at' => Carbon::now()
        ]);

        $service_image -> move($upload_location,$image_name);

        return redirect()->route('service')->with('success',$oldData." --> ".$newData);
    }


    public function delete($id){
        
        $old_image = Service::find($id)->service_image;
        @unlink($old_image);
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('service')->with('success',"delete --> ".$service -> service_name);

    }
}
