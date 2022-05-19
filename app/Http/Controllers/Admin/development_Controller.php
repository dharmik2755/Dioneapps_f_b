<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mobile;


class development_Controller extends Controller
{
     // add
     public function create(Request $res)
     {
         if (isset($res->save)) 
         {
             
             $title = $res->title;
             $description = $res->description;
             $image = $res->file('image');
             $image_name = rand(0,999999).$image->getClientOriginalName('image');
             $image->move('upload',$image_name);
 
             $data = array('title' => $title , 'description' => $description , 'image' => $image_name );
             mobile::insert($data);
             
             return redirect()->route('development.view');
         }
         return view('Admin.development.add_development_data');
     }
 
     // show
     public function show(Request $id)
     {
         $show_data = mobile::get();
         $data['mobile'] = $show_data;
 
         return view('Admin.development.view_development_data',$data);
     }
 
     // edit
     public function edit(Request $res,$id)
     {
         $update_data = mobile::where('id',$id)->get();
         $old_image = $update_data->first();
 
         if (isset($res->edit)) 
         {
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
             }
 
             $data = array('title' => $title , 'description' => $description , 'image' => $image_name );
             mobile::where('id',$id)->update($data);
             
             return redirect()->route('development.view');
         }
 
         return view('Admin.development.edit_development_data',['edit_mobile_data'=>$update_data]);
     }
 
     // delete
     public function destroy($id)
     {
         mobile::where('id',$id)->delete();
         return redirect()->route('development.view');
     }
}
