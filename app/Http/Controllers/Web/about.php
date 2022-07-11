<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\renowned;
use App\Models\about_experts;
use App\Models\project_contact_Controllers;
use App\Models\counter;
use App\Models\footer_first;
use App\Models\footer_secound;
use App\Models\footer_forth;
use App\Models\footer_fifth;


class about extends Controller
{
    // about us page
    public function about(Request $res)
    {
        $renowned = about_experts::where('status',1)->get();
        $data['renowned'] = $renowned;

        $renowneds = renowned::where('status',1)->get();
        $data['renowneds'] = $renowneds;

        $counter_data = counter::get();
        $data['counter'] = $counter_data;

        $project = project_contact_Controllers::where('status',1)->get();
        $data['project_detail'] = $project;

                $footer_first = footer_first::where('status',1)->get();
                $data['footer_first'] = $footer_first;
                
                $footer_secound = footer_secound::where('status',1)->get();
                $data['footer_secound'] = $footer_secound;
                
                $footer_forth = footer_forth::where('status',1)->get();
                $data['footer_forth'] = $footer_forth;
                
                $footer_fifth = footer_fifth::where('status',1)->get();
                $data['footer_fifth'] = $footer_fifth;
        return view('about',$data);
    }
}
