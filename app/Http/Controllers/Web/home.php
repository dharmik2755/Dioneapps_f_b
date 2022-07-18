<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\home_slider;
use App\Models\mobile;
use App\Models\stages_of_work;
use App\Models\about;
use App\Models\counter;
use App\Models\clients;
use App\Models\contacts;
use App\Models\footer_first;
use App\Models\footer_secound;
use App\Models\footer_forth;
use App\Models\footer_fifth;
use App\Models\user_contacts;
use Illuminate\Support\Facades\Session;

class home extends Controller
{
    // home page
    public function home(Request $res)
    {
        $home_slider_data = home_slider::where('status',1)->get();
        $data['home_slider'] = $home_slider_data;

        $developer_data = mobile::where('status',1)->get();
        $data['mobile_data'] = $developer_data;
       
        $stages = stages_of_work::get();
        $data['stages_of_work_data'] = $stages;
        
        $about_data = about::where('status',1)->get();
        $data['about_data'] = $about_data;
        
        $counter_data = counter::get();
        $data['counter'] = $counter_data;
        
        $clients = clients::where('status',1)->get();
        $data['clients'] = $clients;

        $contact = contacts::get();
        $data['contact'] = $contact;

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
                
                return redirect('/');
            }


        return view('index',$data);
    }

}
