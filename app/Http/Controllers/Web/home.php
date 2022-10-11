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
use App\Models\contact_media_info;
use App\Models\contacts;
use App\Models\footer_first;
use App\Models\footer_forth;
use App\Models\footer_fifth;
use App\Models\specialized;
use App\Models\specializ_id;
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

        $specialized = specialized::where('status',1)->get();
        $data['specialized'] = $specialized;

        $contact_media_info = contact_media_info::get();
        $data['contact_media_info'] = $contact_media_info;

        $footer_first = footer_first::where('status',1)->get();
        $data['footer_first'] = $footer_first;
        
        $footer_forth = footer_forth::where('status',1)->get();
        $data['footer_forth'] = $footer_forth;
        
        $footer_fifth = footer_fifth::where('status',1)->get();
        $data['footer_fifth'] = $footer_fifth;

        $specializ_id = specializ_id::where('status',1)->get();
        $data['specializ_id'] = $specializ_id;
        
        return view('index',$data);
    }

}
