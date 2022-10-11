<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\about_experts;

class about_expert extends Controller
{
    // create about expert data
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            $title = $res->title;
            $description = $res->description;
            $array_data = $res->input('sub_title');
            $add_array_data = implode(',',$array_data);
           
            $data = array('title' => $title , 'description' => $description , 'sub_title' => $add_array_data );        
            
            about_experts::insert($data);
            return redirect()->route('about.expert.view');
        }
        return view('Admin.about_expert.add_about_expert_data');
    }

    // show about expert data
    public function show(Request $res)
    {
        $about_experts_data = about_experts::get();
        $data['about_experts'] = $about_experts_data;

        return view('Admin.about_expert.view_about_expert_data',$data);
    }

    // edit about expert data
    public function edit(Request $res,$id)
    {   
        $about_experts_data = about_experts::where('id',$id)->get();
        
        if (isset($res->edit)) 
        {
            $title = $res->title;
            $description = $res->description;

            $array_data = $res->input('sub_title');
            $add_array_data = implode(',',$array_data);
           

            $data = array('title' => $title , 'description' => $description , 'sub_title' => $add_array_data );        
            
            about_experts::where('id',$id)->update($data);

            return redirect()->route('about.expert.view');
        
        }

        return view('Admin.about_expert.edit_about_expert_data',['edit_data'=>$about_experts_data]);
    }

    // delete about expert data
    public function destroy(Request $res,$id)
    {
        about_experts::where('id',$id)->delete();;

        return redirect()->route('about.expert.view');
    }

     //active and deactive button
     public function active_and_deactive(Request $res)
     {
         $user = about_experts::find($res->id);
         $user->status = $res->status;
         $user->save();
 
         return response()->json(['success'=>'Status change successfully.']);
     }
}
