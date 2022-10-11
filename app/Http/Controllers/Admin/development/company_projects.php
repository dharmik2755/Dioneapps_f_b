<?php

namespace App\Http\Controllers\Admin\development;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\company_project;
use App\Models\specializ_id;
use Illuminate\Support\Facades\File;

class company_projects extends Controller
{

    public function create(Request $res)
    {
        if (isset($res->save)) {

            $special_id = $res->special_id;
            $title = $res->title;
            $sub_title = $res->sub_title;
            $description = $res->description;
            if ($res->file('image')) 
            {
                foreach ($res->file('image') as $image) 
                {
                    $image_name = rand(0,999999) . $image->getClientOriginalName('image');
                    $image->move('upload/', $image_name);
                    $image_multi_data[] = $image_name;
                }
            }

            $data = array('special_id' => $special_id, 'title' => $title, 'sub_title' => $sub_title, 'description' => $description, 'image' => implode(',',$image_multi_data));

            // echo'<pre>';
            // print_r($data);
            // die();

            company_project::insert($data);
            return redirect()->route('company-projects.view');
        }
        $specializ_id = specializ_id::where('status', 1)->get();
        return view('Admin.company_project.add', compact('specializ_id'));
    }

    public function show(Request $res)
    {
        $company_project = company_project::get();
        $specializ_id = specializ_id::where('status', 1)->get();
        return view('Admin.company_project.view', compact('company_project', 'specializ_id'));
    }

    public function edit(Request $res, $id)
    {
        $company_project = company_project::where('id', $id)->get();
        $old_image = $company_project->first();
        $old_image_path = 'upload/' . $old_image->image;

        if (isset($res->edit)) 
        {
            $special_id = $res->special_id;
            $title = $res->title;
            $sub_title = $res->sub_title;
            $description = $res->description;
            $image = $res->file('image');
            if ($image == '') 
            {
                $image_name = $old_image->image;
               $image_multi_data[] = $image_name;
            } 
            else 
            {
                foreach ($res->file('image') as $image) 
                {
                    $image_name = rand(0,999999).$image->getClientOriginalName('image');
                    $image->move('upload/',$image_name);
                    $image_multi_data[] = $image_name;
                }
                foreach(explode(',', $old_image->image) as $img)
                { 
                    if (File::exists(public_path('upload/').$img))
                    {
                        File::delete(public_path('upload/').$img);
                    }
                }
            }
            $data = array('special_id' => $special_id, 'title' => $title, 'sub_title' => $sub_title, 'image' => implode(',',$image_multi_data));

            // echo'<pre>';
            // print_r($data);
            // die();

            company_project::where('id', $id)->update($data);
            return redirect()->route('company-projects.view');
        }
        $specializ_id = specializ_id::where('status', 1)->get();
        return view('Admin.company_project.edit', compact('specializ_id', 'company_project'));
    }

    public function destroy(Request $res,$id)
    {
        $company_project = company_project::find($id);
        foreach (explode(',',$company_project->image) as $img) {
            if(File::exists(public_path('upload/').$img)) 
            {
                File::delete(public_path('upload/').$img);
            }   
        }
        $company_project->delete();
        return redirect()->route('company-projects.view');
    }
     // active_and_deactive
     public function active_and_deactive(Request $res)
     {
         $user = company_project::find($res->id);
         $user->status = $res->status;
         $user->save();
 
         return response()->json(['success'=>'Status change successfully.']);
     }
}
