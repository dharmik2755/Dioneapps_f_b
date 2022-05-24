<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\renowned;
use App\Models\about_experts;


class about extends Controller
{
    // about us page
    public function about(Request $res)
    {
        $renowned = about_experts::where('status',1)->get();
        $data['renowned'] = $renowned;

        $renowneds = renowned::where('status',1)->get();
        $data['renowneds'] = $renowneds;

        return view('about',$data);
    }
}
