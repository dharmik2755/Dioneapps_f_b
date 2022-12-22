<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\renowned;
use App\Models\about_experts;
use App\Models\project_contact_Controllers;
use App\Models\about;
use App\Models\about_counter;
use App\Models\contact_media_info;
use App\Models\footer_first;
use App\Models\we_expert;
use App\Models\footer_forth;
use App\Models\footer_fifth;
use App\Models\specializ_id;
use App\Models\project_collage;
use App\Models\team_management;

class about_page extends Controller
{
    public function about(Request $res)
    {
        $we_expert = we_expert::with('pcimage:image')->get();
        $project_collage = project_collage::where('status', 1)->get();
        $about_counter = about_counter::where('status',1)->get();
        $renowned = about_experts::where('status', 1)->get();
        $contact_media_info = contact_media_info::get();
        $renowneds = renowned::where('status', 1)->get();
        $team_management_admin = team_management::where('status',1)->where('team_member','admin')->orderBy('index', 'ASC')->get();
        $team_management_team = team_management::where('status',1)->where('team_member','team')->orderBy('index', 'ASC')->get();

        $project_detail = project_contact_Controllers::where('status', 1)->get(); 
        $footer_first = footer_first::where('status', 1)->get();
        $footer_forth = footer_forth::where('status', 1)->get();
        $footer_fifth = footer_fifth::where('status', 1)->get();
        $about_data = about::where('status', 1)->get();
        $specializ_id = specializ_id::where('status',1)->get();

        return view('about',compact('about_counter','renowned','contact_media_info' ,'we_expert','renowneds','project_detail','footer_first','footer_forth','footer_fifth','about_data','specializ_id','project_collage', 'team_management_admin', 'team_management_team'));
    }
}
