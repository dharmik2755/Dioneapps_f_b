<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contacts;
use App\Models\contact_media_info;
use App\Models\footer_first;
use App\Models\footer_secound;
use App\Models\footer_forth;
use App\Models\footer_fifth;
use App\Models\specializ_id;
use App\Models\user_contacts;

class contactus extends Controller
{
    // contact us page
    public function contactus(Request $res)
    {
        $contact = contacts::get();
        $data['contact'] = $contact;
        
        $contact_media_info = contact_media_info::get();
        $data['contact_media_info'] = $contact_media_info;

        $footer_first = footer_first::where('status',1)->get();
        $data['footer_first'] = $footer_first;
        
        $footer_secound = footer_secound::where('status',1)->get();
        $data['footer_secound'] = $footer_secound;
        
        $footer_forth = footer_forth::where('status',1)->get();
        $data['footer_forth'] = $footer_forth;
        
        $footer_fifth = footer_fifth::where('status',1)->get();
        $data['footer_fifth'] = $footer_fifth;

            if (isset($res->contact)) 
            {
                // dd('ifuwheiofuch');
                $name = $res->name;
                $phone_number = $res->phone_number;   
                $email = $res->email;
                $message = $res->message;

                $data = array('name' => $name , 'phone_number' => $phone_number , 'email' => $email , 'message' => $message);

                user_contacts::insert($data);
                
                return redirect('/contactus');
            }

        $specializ_id = specializ_id::where('status',1)->get();
        $data['specializ_id'] = $specializ_id;
        
        return view('contactus',$data);
    }
}
