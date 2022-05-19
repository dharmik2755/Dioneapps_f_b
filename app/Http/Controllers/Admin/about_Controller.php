<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\about;

class about_Controller extends Controller
{
    
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            $title = $res->title;
            $sub_title = $res->sub_title;
            $description = $res->description;
            $image = $res->file('image');
            $image_name = rand(0,999999).$image->getClientOriginalName('image');
            $image->move('upload',$image_name);

            $data = array('title' => $title ,'sub_title' => $sub_title , 'description' => $description , 'image' => $image_name);

            about::insert($data);

            return redirect()->route('about.view');
        }
        return view('Admin.about.add_about_data');
    }

    // show data
    public function show(Request $id)
    {
        $show_data = about::get();
    
        return view('Admin.about.view_about_data',['about_data'=>$show_data]);
    }
    
    // edit data
    public function edit(Request $res,$id)
    {
        $update_data = about::where('id',$id)->get();
        $old_image = $update_data->first();

        if (isset($res->edit)) 
        {
            $title = $res->title;
            $sub_title = $res->sub_title;
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
            }

            $data = array('title' => $title , 'sub_title'=>$sub_title , 'description' => $description , 'image' => $image_name );
            about::where('id',$id)->update($data);
            
            return redirect()->route('about.view');
        }
        return view('Admin.about.edit_about_data',['about_data'=>$update_data]);
    }

    // delete data
    public function destroy($id)
    {
        about::where('id',$id)->delete();
         return redirect()->route('about.view');
    }
}
