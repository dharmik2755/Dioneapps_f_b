<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\features_development;
use Illuminate\Http\Request;
use App\Models\specializ_id;
use Illuminate\Support\Facades\File;

class features_Controller extends Controller
{
    public function create(Request $res)
    {
        if (isset($res->add)) {

            $special_id = $res->special_id;
            $image = $res->file('image');
            $image_name = rand(0, 999999) . $image->getClientOriginalName('image');
            $image->move('upload', $image_name);

            $title = $res->title;
            $array_data = $res->input('sub_title');
            $add_array_data = implode(',', $array_data);


            $data = array('special_id' => $special_id , 'image' => $image_name, 'title' => $title, 'sub_title' => $add_array_data);

            features_development::insert($data);

            return redirect()->route('features.view');
        }
        $show_specializ = specializ_id::where('status',1)->get();
        return view('Admin.features_development.add',compact('show_specializ'));
    }

    public function show(Request $res)
    {
        $show_specializ = specializ_id::where('status',1)->get();
        $features_data = features_development::get();
        return view('Admin.features_development.view',compact('features_data','show_specializ'));
    }

    public function edit(Request $res, $id)
    {
        $show_specializ = specializ_id::where('status',1)->get();
        $features_development = features_development::where('id',$id)->get();
        $old_image = $features_development->first();
        $old_image_path = 'upload/'.$old_image->image;
        
        if (isset($res->edit)) 
        {
            $special_id = $res->special_id;
            $image = $res->file('image');
            if ($image=="") {
                $image_name = $old_image->image;
            }
            else {
                $image_name = rand(0,999999).$image->getClientOriginalName('image');
                $image->move('upload',$image_name);
                if (File::exists($old_image_path)) {
                    file::delete($old_image_path);
                }
            }
            $title = $res->title;
            $array_data = $res->input('sub_title');
            $add_array_data = implode(',',$array_data);
           

            $data = array('special_id' => $special_id ,'image' => $image_name , 'title' => $title , 'sub_title' => $add_array_data );        
            
            // echo '<pre>';
            // print_r($data);
            // die;

            features_development::where('id',$id)->update($data);

            return redirect()->route('features.view');
        
        }
        return view('Admin.features_development.edit',compact('features_development','show_specializ'));
    }

    public function destroy(Request $res,$id)
    {
        $features_data = features_development::find($id);
        $old_image_path = 'upload/'.$features_data->image;
        if(File::exists($old_image_path)) {
            File::delete($old_image_path);
        }
        $features_data->delete();
        return redirect()->route('features.view');
    }

    public function active_and_deactive(Request $res)
    {
        $user = features_development::find($res->id);
        $user->status = $res->status;
        $user->save();
        return response()->json(['success'=>'Status Change Successfully...']);
    }

}
