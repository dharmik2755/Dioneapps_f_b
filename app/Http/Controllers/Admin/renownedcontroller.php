<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\renowned;

class renownedcontroller extends Controller
{
    
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            $title = $res->title;
            $description = $res->description;
            $array_of_the_sub_title = $res->input('sub_title');
            $catch_data_sub_title = implode(' | ',$array_of_the_sub_title);
            $array_of_the_sub_description = $res->input('sub_description');
            $catch_data_description = implode(' | ',$array_of_the_sub_description);

            $data = array('title' => $title , 'description' => $description , 'sub_title' => $catch_data_sub_title , 'sub_description' => $catch_data_description );

            renowned::insert($data);
            return redirect()->route('renowned.view');
        }
        return view('Admin.renowned.add_renowned_data');
    }

    // show data
    public function show(Request $id)
    {   
        $show_data = renowned::get();
        $data['renowned'] = $show_data;

        return view('Admin.renowned.view_renowned_data',$data);
    }

    
    public function edit(Request $res,$id)
    {
        $edit_show_data = renowned::where('id',$id)->get();
        $data['renowned'] = $edit_show_data;

        if (isset($res->edit)) 
        {
            $title = $res->title;
            $description = $res->description;
            $array_of_the_sub_title = $res->input('sub_title');
            $catch_data_sub_title = implode(' | ',$array_of_the_sub_title);
            $array_of_the_sub_description = $res->input('sub_description');
            $catch_data_description = implode(' | ',$array_of_the_sub_description);

            $data = array('title' => $title , 'description' => $description , 'sub_title' => $catch_data_sub_title , 'sub_description' => $catch_data_description );

            renowned::where('id',$id)->update($data);
            return redirect()->route('renowned.view');
            
        }

        return view('Admin.renowned.edit_renowned_data',$data);
    }

    
    public function destroy($id)
    {
        renowned::where('id',$id)->delete();
        return redirect()->route('renowned.view');
    }
    // active and deactive id store in data base
    public function active_and_deactive(Request $res)
    {
        $user = renowned::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
