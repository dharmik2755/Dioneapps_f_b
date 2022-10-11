<?php

namespace App\Http\Controllers\Admin\development;

use App\Http\Controllers\Controller;
use App\Models\company_work_features;
use App\Models\specializ_id;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class company_work_features_Controller extends Controller
{
    
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            $special_id = $res->special_id;
            $title = $res->title;
            $description = $res->description;
            $image = $res->file('image');
            $image_name = rand(0,999999).$image->getClientOriginalName('image');
            $image->move('upload',$image_name);

            $data = array('special_id' => $special_id , 'title' => $title , 'description' => $description , 'image' => $image_name);

            // echo '<pre>';
            // print_r($data);
            // die();

            company_work_features::insert($data);
            return redirect()->route('company-work-features.view');
        }
        $specializ_id = specializ_id::where('status',1)->get();
        return view('Admin.company_work_in_features.add',compact('specializ_id'));
    }

    
    public function show(Request $id)
    {
        $specializ_id = specializ_id::where('status',1)->get();
        $company_work = company_work_features::get();
        return view('Admin.company_work_in_features.view',compact('company_work','specializ_id'));
    }

    
    public function edit(Request $res,$id)
    {
        $update_data = company_work_features::where('id',$id)->get();
        $old_image = $update_data->first();
        $old_image_path = 'upload/'.$old_image->image;

        if (isset($res->edit)) 
        {
            $special_id = $res->special_id;
            $title = $res->title;
            $description = $res->description;
            $image = $res->file('image'); 
            if($image=="") 
            {
                $image_name = $old_image->image;
            }            
            else
            {
                $image_name = rand(0,999999).$image->getClientOriginalName('image');
                $image->move('upload',$image_name);
                if (File::exists($old_image_path)) 
                {
                    File::delete($old_image_path);
                }
            }

            $data = array('special_id' => $special_id , 'title' => $title , 'description' => $description , 'image' => $image_name );
            company_work_features::where('id',$id)->update($data);
            
            return redirect()->route('company-work-features.view');
        }
        $show_specializ_id = specializ_id::where('status',1)->get();
        return view('Admin.company_work_in_features.edit',compact('update_data','show_specializ_id'));
    }

    public function destroy(Request $res,$id)
    {
        $data = company_work_features::find($id);
        $old_image_path = 'upload/'.$data->image;
        if (File::exists($old_image_path))
        {
            File::delete($old_image_path);
        }
        $data->delete();
        return redirect()->route('company-work-features.view');
    }

    public function avtive_and_deactive(Request $res)
    {
        $user = company_work_features::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status Change Successfully']);

    }
}
