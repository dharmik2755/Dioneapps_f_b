<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\our_services;

class our_services_Controller extends Controller
{
    
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            $image = $res->file('image');
            $image_name = rand(0,999999).$image->getClientOriginalName('image');
            $image->move('upload',$image_name); 
            $title = $res->title;
            $description = $res->description;

            $data = array('image' => $image_name ,'title' => $title , 'description' => $description );

            our_services::insert($data);

            return redirect()->route('our-services.view');

        }
        return view('Admin.our_services.add_our_services');
    }

    
    public function show(Request $res)
    {   $our_services = our_services::get();
        $data['our_services'] = $our_services;
        return view('Admin.our_services.view_our_services',$data);
    }

    
    public function edit(Request $res,$id)
    {   
        $our_service = our_services::where('id',$id)->get();
        $data['our_services'] = $our_service;
        $old_image = $our_service->first();
        $old_image_path = 'upload/'.$old_image->image;
        
        if (isset($res->edit)) 
        {
            $image = $res->file('image');
            if ($image=="") 
            {
                $image_name = $old_image->image;
            }
            else
            {
                $image_name = rand(0,999999).$image->getClientOriginalName('image');
                $image->move('upload/',$image_name);
                if(File::exists($old_image_path)) 
                {
                    File::delete($old_image_path);
                }
            }
            $title = $res->title;
            $description = $res->description;

            $data = array( 'image' => $image_name , 'title' => $title , 'description' => $description );

            our_services::where('id',$id)->update($data);

            return redirect()->route('our-services.view');

        }

        return view('Admin.our_services.edit_our_services',$data);
    }

   
    public function destroy($id)
    {
        $our_service = our_services::find($id);
        $old_image_path = 'upload/'.$our_service->image;
        if (File::exists($old_image_path)) 
        {
            File::delete($old_image_path);
        }
        $our_service->delete();

        return redirect()->route('our-services.view');
    }

    // active and deactive
    public function active_and_deactive(Request $res)
    {
        $user = our_services::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
