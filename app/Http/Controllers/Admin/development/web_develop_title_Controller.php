<?php

namespace App\Http\Controllers\Admin\development;

use App\Http\Controllers\Controller;
use App\Models\specializ_id;
use App\Models\web_develop_title;
use Illuminate\Http\Request;

class web_develop_title_Controller extends Controller
{
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            $special_id = $res->special_id;
            $title = $res->title;
            $description = $res->description;

            $data = array('special_id' => $special_id,'title' => $title , 'description' => $description );

            // echo "<pre>";
            // print_r($data);
            // die();

            web_develop_title::insert($data);

            return redirect()->route('web-title.view');
        }
        $specializ_id = specializ_id::where('status',1)->get();
        return view('Admin.web_title.add',compact('specializ_id'));
    }

    public function show(Request $res)
    {
        $web_title = web_develop_title::get();
        return view('Admin.web_title.view',compact('web_title'));
    }

    public function edit(Request $res,$id)
    {
        $web_develop_title = web_develop_title::where('id',$id)->get();

        if (isset($res->edit)) 
        {
            $special_id = $res->special_id;
            $title = $res->title;
            $description = $res->description;

            $update_data = array('special_id' => $special_id ,'title' => $title , 'description' => $description );

            // echo "<pre>";
            // print_r($update_data);
            // die();

            web_develop_title::where('id',$id)->update($update_data);

            return redirect()->route('web-title.view');
        }
        $specializ_id = specializ_id::where('status',1)->get();
        return view('Admin.web_title.edit',compact('web_develop_title','specializ_id'));
    }

    public function destroy(Request $res,$id)
    {
        web_develop_title::where('id',$id)->delete();
        return redirect()->route('web-title.view');
    }
    public function active_and_deactive(Request $res)
    {
        $user = web_develop_title::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
