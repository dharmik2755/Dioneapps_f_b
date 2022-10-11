<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\about_page;
use Illuminate\Http\Request;
use App\Models\about_counter;

class about_counter_Controller extends Controller
{
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            $number = $res->number;
            $title = $res->title;
            $description = $res->description;

            $data = array('number' => $number ,'title' => $title , 'description' => $description );

            about_counter::insert($data);

            return redirect()->route('about-counter.view');
        }
        return view('Admin.about_counter.add');
    }

    public function show(Request $res)
    {
        $show_data = about_counter::get();
        return view('Admin.about_counter.view',compact('show_data'));
    }

    public function edit(Request $res,$id)
    {
        $update_data = about_counter::where('id',$id)->get();
        if (isset($res->edit)) 
        {
            $number = $res->number;
            $title = $res->title;
            $description = $res->description;
           

            $data = array('number' => $number , 'title' => $title , 'description' => $description );
            about_counter::where('id',$id)->update($data);
            
            return redirect()->route('about-counter.view');
        }
        return view('Admin.about_counter.edit',compact('update_data'));
    }

    public function destroy(Request $res,$id)
    {
        about_counter::where('id',$id)->delete();

        return redirect()->route('about-counter.view');
    }

    public function active_and_deactive(Request $res)
    {
        $user = about_counter::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
