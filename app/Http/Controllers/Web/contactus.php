<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contacts;
use App\Models\contact_media_info;

class contactus extends Controller
{
    // contact us page
    public function contactus(Request $res)
    {
        $contact = contacts::get();
        $data['contact'] = $contact;
        
        $contact_media_info = contact_media_info::get();
        $data['contact_media_info'] = $contact_media_info;

        return view('contactus',$data);
    }
}
