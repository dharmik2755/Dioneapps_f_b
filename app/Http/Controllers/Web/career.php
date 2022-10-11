<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\career_page_titles;
use App\Models\contacts;
use App\Models\career_page_perkss;
use App\Models\contact_media_info;
use App\Models\footer_first;
use App\Models\footer_secound;
use App\Models\footer_forth;
use App\Models\footer_fifth;
use App\Models\specializ_id;

class career extends Controller
{
    //career page
    public function career(Request $res)
    {
        $career_page_titles = career_page_titles::where('status', 1)->get();
        $data['career_page_titles'] = $career_page_titles;

        $contact_media_info = contact_media_info::get();
        $data['contact_media_info'] = $contact_media_info;

        $contact = contacts::get();
        $data['contact'] = $contact;

        $perkss = career_page_perkss::where('status', 1)->get();
        $data['career_page_perkss'] = $perkss;

        $footer_first = footer_first::where('status', 1)->get();
        $data['footer_first'] = $footer_first;

        $footer_secound = footer_secound::where('status', 1)->get();
        $data['footer_secound'] = $footer_secound;

        $footer_forth = footer_forth::where('status', 1)->get();
        $data['footer_forth'] = $footer_forth;

        $footer_fifth = footer_fifth::where('status', 1)->get();
        $data['footer_fifth'] = $footer_fifth;

        $specializ_id = specializ_id::where('status',1)->get();
        $data['specializ_id'] = $specializ_id;

        return view('career', $data);
    }
}
