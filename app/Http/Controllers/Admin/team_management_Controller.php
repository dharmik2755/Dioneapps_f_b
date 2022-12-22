<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\team_management;
use Illuminate\Support\Facades\File;

class team_management_Controller extends Controller
{

    // public function DemoNo(){
    //     $query = $this->db->select('MAX(demo_id) as demo_id');
    //     $query = $this->db->get('demo');
    //     $newresult =  $query->result_array();
    //        $this->db->where('demo_id', $newresult[0]['demo_id']);
    //        $query = $this->db->get('demo');
    //     $newresult =  $query->result_array();
    //     if(empty($newresult)){
    //         $demo_no = 0;
    //     }else{
    //         $demo_no = $newresult[0]['demo_no'];
    //     }
    
    public function create(Request $res)
    {   
        $team_management = team_management::get();
        $max_data = team_management::max('index');
        $team_management_count = count($team_management);

        if (isset($res->save)) {

            $team_member = $res->team_member;
            $firstname = $res->firstname;
            $lastname = $res->lastname;
            $email = $res->email;
            $number = $res->number;
            $position = $res->position;
            $education = $res->education;
            $birthdate = $res->birthdate;

            // if ($max_data == $max_data) {
                $index = $max_data + 1;
            // } 
            $image = $res->file('image');
            $image_name = rand(0,999999).$image->getClientOriginalName('image');
            $image->move('upload/',$image_name);


            $data = array('team_member' => $team_member ,'firstname' => $firstname ,'lastname' => $lastname ,'email' => $email ,'number' => $number ,'position' => $position ,'education' => $education ,'birthdate' => $birthdate ,'index' => $index ,'image' => $image_name );

            // echo"<pre>";
            // print_r($data);
            // die();

            team_management::insert($data);

            return redirect()->route('team-management.view');

        }

        return view('Admin.team_management.add',compact('max_data'));
    }

    public function show()
    {
        $team_management = team_management::orderBy('id', 'ASC')->get();
        $team_management_count = count($team_management);
        return view('Admin.team_management.view',compact('team_management','team_management_count'));
    }

    public function edit(Request $res,$id)
    {
        $team_management = team_management::where('id',$id)->get();
        $old_data = $team_management->first();
        $old_image_path = 'upload/'.$old_data->image;
        

        if (isset($res->edit)) {
            
            $team_member = $res->team_member;
            $firstname = $res->firstname;
            $lastname = $res->lastname;
            $email = $res->email;
            $number = $res->number;
            $position = $res->position;
            $education = $res->education;
            $birthdate = $res->birthdate;

            $old_index = $old_data->index;
            $new_index = $res->index;

            $image = $res->file('image');
            if ($image=="") {
                $image_name = $old_data->image;
            }
            else {
                $image_name = rand(0,999999).$image->getClientOriginalName('image');
                $image->move('upload/',$image_name);
                if (File::exists($old_image_path)) {
                    File::delete($old_image_path);
                }
            }

            $old_index_id = array('index' => $old_index );

            
            $data = array('team_member' => $team_member ,
                            'firstname' => $firstname ,
                            'lastname' => $lastname , 
                            'email' => $email , 
                            'number' => $number ,
                            'position' => $position ,
                            'education' => $education ,
                            'birthdate' => $birthdate ,
                            'index' => $new_index ,
                            'image' => $image_name );

            // echo"<pre>";
            // print_r($data);
            // echo"<pre>";
            // print_r($old_index_id);
            // die();
            
            team_management::where('index',$new_index)->update($old_index_id);
            team_management::where('id',$id)->update($data);

            return redirect()->route('team-management.view');
        }

        return view('Admin.team_management.edit',compact('team_management'));
    }

    public function destroy(Request $res,$id)
    {
        $team_management = team_management::find($id);
        $old_image_path = 'upload/'.$team_management->image;
        if (File::exists($old_image_path)) {
            File::delete($old_image_path);
        }
        $team_management->delete();
        return redirect()->route('team-management.view');
    }

    public function active_and_deactive(Request $res)
    {
        $user = team_management::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

}
