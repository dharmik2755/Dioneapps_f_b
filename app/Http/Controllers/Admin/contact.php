<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contacts;

class contact extends Controller
{
    
    public function create()
    {
       return view('Admin.contact.add_contact_data');
    }

    
    public function show(Request $id)
    {
       $show_data = contacts::get();
       $data['contact_data'] = $show_data; 
       return view('Admin.contact.view_contact_data',$data);
    }

    
    public function edit(Request $res,$id)
    {
        $edit_data_show = contacts::where('id',$id)->get();
        $data['edit_data'] = $edit_data_show;
        $old_image = $edit_data_show->first();

        if (isset($res->edit)) 
        {
            $title = $res->title;
            $description = $res->description;
            $image = $res->file('image');
            if($image=="")
            {
                $image_name = $old_image->image;
            }
            else{
                $image_name = rand(0,999999).$image->getClientOriginalName('image');
                $image->move('upload',$image_name);
            }

            $update_data = array('title' => $title , 'description' => $description , 'image' => $image_name );

            contacts::where('id',$id)->update($update_data);

            return redirect()->route('contact.view');
        }
        return view('Admin.contact.edit_contact_data',$data);
    }

    
    public function destroy($id)
    {
        //
    }
}
