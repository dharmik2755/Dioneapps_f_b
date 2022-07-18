<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user_contacts;
// use Illuminate\Validation\Validator;
// use Ramsey\Uuid\Rfc4122\Validator;
use Illuminate\Support\Facades\Validator;

class user_contact_Controller extends Controller
{
    

   
    public function create(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name'=>'required|max:191',
        //     'phone_number'=>'required|max:10|min:10|numeric',
        //     'email'=>'required|email|max:191',
        //     'message'=>'required|max:1000',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'status'=>400,
        //         'errors'=>$validator, 
        //     ]);
        // }
        // else
        // {
            $u_contact = new user_contacts;
            $u_contact->name = $request->input('name'); 
            $u_contact->phone_number = $request->input('phone_number');
            $u_contact->email = $request->input('email'); 
            $u_contact->message = $request->input('message');
            $u_contact->save();

        //     return response()->json([
        //         'status'=>200,
        //         'message'=>'Student Add Successfully', 
        //     ]);

        // }

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
