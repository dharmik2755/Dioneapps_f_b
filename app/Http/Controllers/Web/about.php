<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\renowned;
use App\Models\about_experts;
use App\Models\project_contact_Controllers;
use App\Models\counter;


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

        return view('about',$data);
    }
}
