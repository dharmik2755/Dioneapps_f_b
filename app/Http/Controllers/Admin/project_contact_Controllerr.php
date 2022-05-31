<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\project_contact_Controllers;

class project_contact_Controllerr extends Controller
{
    
    public function create(Request $res)
    {
        if(isset($res->add))
        {
            $title = $res->title;
            $description = $res->description;
            
            $data = array('title' =>  $title , 'description' => $description );

            project_contact_Controllers::insert($data);
            return redirect()->route('project.contact.view');
        }
        return view('Admin.project_contact.add_project_contact');
    }

    
    public function show(Request $id)
    {
        $show_data = project_contact_Controllers::get();
        $data['project_contact_Controllers'] = $show_data;

        return view('Admin.project_contact.view_project_contact',$data);
    }

    
    public function edit(Request  $res,$id)
    {
        $show_data = project_contact_Controllers::where('id',$id)->get();
        $data['project_contact_Controllers'] = $show_data;
        if(isset($res->edit))
        {
            $title = $res->title;
            $description = $res->description;
            
            
            $data = array('title' =>  $title , 'description' => $description );

            project_contact_Controllers::where('id',$id)->update($data);
            return redirect()->route('project.contact.view');
        }
        return view('Admin.project_contact.edit_project_contact',$data);
    }

    
    
    public function destroy($id)
    {
        project_contact_Controllers::where('id',$id)->delete();

        return redirect()->route('project.contact.view');
    }

    public function active_and_deactive(Request $res)
    {
        $user = project_contact_Controllers::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
