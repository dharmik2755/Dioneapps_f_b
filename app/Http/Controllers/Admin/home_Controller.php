<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\home_slider;
use App\Models\login;

class home_Controller extends Controller
{
    // login page
    public function login(Request $res)
    {
            if (isset($res->login)) 
            {
                $username = $res->username;   
                $password = $res->password;
                $select_data = login::where('admin',$username)->where('password',$password);
                
                if ($select_data->count()==1) 
                {
                    $user_data = $select_data->first();
                    Session::put('user_id',$user_data->id);
    
                    return redirect('/dashboard');
                }
                else{
                    
                    return redirect('/Admin-side')->with('alert','please Enter valid Username and Password ');
                }
    
            }
            return view('Admin.login');
        
    }
    // dahsboard page
    public function dashboard(Request $res)
    {  
        return view('Admin.dashboard');
    }

    public function logout(Request $res)
    {
        $res->Session()->forget('user_id');

        return redirect('/Admin-side');
    }

    // Home slider page insert data -------------------------------------------------
    public function add_home_slider(Request $res)
    {
        if (isset($res->save)) 
        {
            $title = $res->title;
            $description = $res->description;            
            $image = $res->file('image');
            $image_name = rand(0,999999).$image->getClientOriginalName('image');
            $image->move('upload',$image_name);
            
            
            $data = array('title' => $title , 'description' => $description , 'image' =>  $image_name );
            // echo "<per>";
            // print_r($data);
            // die();
            home_slider::insert($data);

            return redirect('/view-home-slider');

        }
        return view('Admin.home.add_home_slider');
    }
    // Home slider page view data
    public function view_home_slider(Request $res)
    {
        $home_slider = home_slider::get();
        // $data['home_slider'] = $show_data;
        return view('Admin.home.view_home_slider', compact('home_slider'));
    }
    // Home slider page update data
    public function edit_home_slider(Request $res,$id)
    {
        $update_data = home_slider::where('id',$id)->get();
        $old_image = $update_data->first();

        if (isset($res->save)) 
        {
            $title = $res->title;
            $description = $res->description;
            $image = $res->file('image');
            if ($image=="") 
            {
                $image_name = $old_image->image;
            }            
            else
            {
                $image_name = rand(0,999999).$image->getClientOriginalName('image');
                $image->move('upload',$image_name);
            }
        
            $data = array('title' => $title , 'description' => $description , 'image' =>  $image_name );
            home_slider::where('id',$id)->update($data);
        
            return redirect('/view-home-slider');
        }

        return view('Admin.home.edit_home_slider',['update_home_slider'=>$update_data]);
    }

    // home slider page delete data
    public function delete_home_slider(Request $res,$id)
    {
        home_slider::where('id',$id)->delete();
        return redirect('/view-home-slider');
    }

    //active and deactive button
    public function active_and_deactive(Request $res)
    {
        $user = home_slider::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

}
