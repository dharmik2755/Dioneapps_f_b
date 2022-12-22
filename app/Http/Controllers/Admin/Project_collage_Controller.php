<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\project_collage;
use Illuminate\Support\Facades\File;

class Project_collage_Controller extends Controller
{
    
    public function create(Request $res)
    {
        if (isset($res->add)) {

            $image = $res->file('image');
            $image_name = rand(0, 999999).$image->getClientOriginalName('image');
            $image->move('upload/',$image_name);
            
            $data = array('image' => $image_name );
            
            // echo"<per>";
            // print_r($data);
            // die();

            project_collage::insert($data);
            return redirect()->route('project-collage.view');
        }

       return view('Admin.project_collage.add');
    }

    public function show()
    {
        $data =  project_collage::get();
        return view('Admin.project_collage.view',compact('data'));
    }

    public function edit(Request $res,$id)
    {
        $project_collage =  project_collage::where('status',1)->get();
        $old_image = $project_collage->first();
        $old_image_path =  'upload/'.$old_image->image;

        if (isset($res->edit)) {
            $image = $res->file('image');
            if ($image=="") {
                $image_name = $old_image->image;
            }
            else {
                $image_name = rand(0, 999999).$image->getClientOriginalName('image');
                $image->move('upload',$image_name);
                if(File::exists($old_image_path))
                {
                    File::delete($old_image_path);
                }
            }

            
            $data = array('image' => $image_name );
            // echo"<per>";
            // print_r($data);
            // die();
            
            project_collage::where('id',$id)->update($data);
            return redirect()->route('project-collage.view');
        }

        return view('Admin.project_collage.edit',compact('project_collage'));
    }

    public function destroy(Request $res,$id)
    {
        $project_collage =  project_collage::find($id);
        $old_image_path = 'upload/'.$project_collage->image;
        if (File::exists($old_image_path) ) 
        {
            File::delete($old_image_path);
        }
        $project_collage->delete();
        return redirect()->route('project-collage.view');
    }

    public function active_and_deactive(Request $res)
    {
        $user = project_collage::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);    
    }
}
