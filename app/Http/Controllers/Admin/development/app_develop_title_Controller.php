<?php

namespace App\Http\Controllers\Admin\development;

use App\Http\Controllers\Controller;
use App\Models\app_develop_title;
use Illuminate\Http\Request;
use App\Models\specializ_id;
use App\Models\specialized;

class app_develop_title_Controller extends Controller
{
    
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            $special_id = $res->special_id;
            $title = $res->title;
            $des = $res->des;
            $ios = $res->ios;
            $ios_des = $res->ios_des;
            $android = $res->android;
            $android_des = $res->android_des;

            $data = array('special_id' => $special_id ,'title' => $title , 'des' => $des , 'ios' => $ios , 'ios_des' => $ios_des , 'android' => $android , 'android_des' => $android_des );

            app_develop_title::insert($data);
            return redirect()->route('app-title.view'); 
        }
        $specializ_id = specializ_id::get();
        return view('Admin.app_title.add',compact('specializ_id'));
    }
    
    public function show(Request $res)
    {
        $app_title = app_develop_title::get();
        return view('Admin.app_title.view',compact('app_title'));
    }

    
    public function edit(Request $res,$id)
    {
        $app_develop_title = app_develop_title::where('id',$id)->get();

        if (isset($res->edit)) 
        {
            $special_id = $res->special_id;
            $title = $res->title;
            $des = $res->des;
            $ios = $res->ios;
            $ios_des = $res->ios_des;
            $android = $res->android;
            $android_des = $res->android_des;

            $update_data = array('special_id' => $special_id , 'title' => $title , 'des' => $des , 'ios' => $ios , 'ios_des' => $ios_des , 'android' => $android , 'android_des' => $android_des );

            // echo "<pre>";
            // print_r($update_data);
            // die();

            app_develop_title::where('id',$id)->update($update_data);

            return redirect()->route('app-title.view');
        }
        $specializ_id = specializ_id::get();
        return view('Admin.app_title.edit',compact('app_develop_title','specializ_id'));
    }

    
    public function destroy(Request $res,$id)
    {
        app_develop_title::where('id',$id)->delete();
        return redirect()->route('app-title.view');
    }

    public function active_and_deactive(Request $res)
    {
        $user = app_develop_title::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
