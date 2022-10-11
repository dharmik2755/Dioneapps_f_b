<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\renowned;
use App\Models\about_experts;
use App\Models\project_contact_Controllers;
use App\Models\counter;
use App\Models\about;
use App\Models\about_counter;
use App\Models\contact_media_info;
use App\Models\footer_first;
use App\Models\footer_secound;
use App\Models\we_expert;
use App\Models\footer_forth;
use App\Models\footer_fifth;
use App\Models\specializ_id;

class about_page extends Controller
{
    public function about2(Request $res)
    {
        $contact_media_info = contact_media_info::get();
        $data['contact_media_info'] = $contact_media_info;
        
        $renowned = about_experts::where('status', 1)->get();
        $data['renowned'] = $renowned;

        $renowneds = renowned::where('status', 1)->get();
        $data['renowneds'] = $renowneds;

        $counter_data = counter::get();
        $data['counter'] = $counter_data;

        $project = project_contact_Controllers::where('status', 1)->get();
        $data['project_detail'] = $project;

        $footer_first = footer_first::where('status', 1)->get();
        $data['footer_first'] = $footer_first;

        $footer_secound = footer_secound::where('status', 1)->get();
        $data['footer_secound'] = $footer_secound;

        $footer_forth = footer_forth::where('status', 1)->get();
        $data['footer_forth'] = $footer_forth;

        $footer_fifth = footer_fifth::where('status', 1)->get();
        $data['footer_fifth'] = $footer_fifth;

        return view('about_page', $data);
    }
    public function about(Request $res)
    {
        $about_counter = about_counter::where('status',1)->get();
        $renowned = about_experts::where('status', 1)->get();
        $contact_media_info = contact_media_info::get();
        $we_expert = we_expert::where('status',1)->get();
        $renowneds = renowned::where('status', 1)->get();
        $counter_data = counter::get(); 
        $project_detail = project_contact_Controllers::where('status', 1)->get(); 
        $footer_first = footer_first::where('status', 1)->get();
        $footer_secound = footer_secound::where('status', 1)->get();
        $footer_forth = footer_forth::where('status', 1)->get();
        $footer_fifth = footer_fifth::where('status', 1)->get();
        $about_data = about::where('status', 1)->get();
        $specializ_id = specializ_id::where('status',1)->get();

        return view('about',compact('about_counter','renowned','contact_media_info' ,'we_expert','renowneds','counter_data','project_detail','footer_first','footer_secound','footer_forth','footer_fifth','about_data','specializ_id'));
    }
}
