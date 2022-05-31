<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\career_page_titles;

class career_page_title extends Controller
{
   
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            $title = $res->title;
            $description = $res->description;

            $data = array('title' => $title , 'description' => $description );

            career_page_titles::insert($data);

            return redirect()->route('career-title.view');

        }
        return view('Admin.career_page_title.add_career_page_title');
    }

   
    public function show(Request $res)
    {
        $career_page_titles = career_page_titles::get();
        $data['career_page_titles'] = $career_page_titles;

        return view('Admin.career_page_title.view_career_page_title',$data);
    }

    
    public function edit(Request $res,$id)
    {
        $edit_data_show = career_page_titles::where('id',$id)->get();
        $data['edit_data'] = $edit_data_show;

        if (isset($res->edit)) 
        {
            $title = $res->title;
            $description = $res->description;

            $update_data = array('title' => $title , 'description' => $description );

            career_page_titles::where('id',$id)->update($update_data);

            return redirect()->route('career-title.view');
        }
        return view('Admin.career_page_title.edit_career_page_title',$data);
    }
    
    public function destroy(Request $res,$id)
    {
        career_page_titles::where('id',$id)->delete();
        return redirect()->route('career-title.view');
    }
    
    // Avtive and Deactive data 
    public function active_and_deactive(Request $res)
    {
        $user = career_page_titles::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
