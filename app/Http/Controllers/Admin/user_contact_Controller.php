<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user_contacts;

class user_contact_Controller extends Controller
{
    

   
    public function create(Request $res)
    {
        $u_contact = new user_contacts;
        $u_contact->name            = $res->name; 
        $u_contact->phone_number    = $res->phone_number;
        $u_contact->email            = $res->email; 
        $u_contact->message         = $res->message;
        $u_contact->save();

        return response()->json(['success'=>'Data Insert successfully.']);
    
    }
    public function show(Request $id)
    {
        $show_contact_data = user_contacts::get();
        $data['user_contact_data'] = $show_contact_data;
 
        return view('Admin.user_contact.view_user_contact_data',$data);
    }

    
    public function destroy(Request $res,$id)
    {
        user_contacts::where('id',$id)->delete();
        return redirect()->route('user.contact.view');
    }


    public function active_and_deactive (Request $res)
    {
        $user = user_contacts::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

}
