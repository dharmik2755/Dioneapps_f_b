<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\career_page_titles;
use App\Models\contacts;
use App\Models\career_page_perkss;

class career extends Controller
{
    //career page
    public function career(Request $res)
    {
        $career_page_titles = career_page_titles::where('status',1)->get();
        $data['career_page_titles'] = $career_page_titles;

        $contact = contacts::get();
        $data['contact'] = $contact;

        $perkss = career_page_perkss::where('status',1)->get();
        $data['career_page_perkss'] = $perkss;

        return view('career',$data);
    }
}
