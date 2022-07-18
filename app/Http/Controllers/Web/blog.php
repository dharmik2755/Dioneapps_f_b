<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\footer_first;
use App\Models\footer_secound;
use App\Models\footer_forth;
use App\Models\footer_fifth;

class blog extends Controller
{
    public function blog(Request $request)
    {
        $footer_first = footer_first::where('status',1)->get();
        $data['footer_first'] = $footer_first;
        
        $footer_secound = footer_secound::where('status',1)->get();
        $data['footer_secound'] = $footer_secound;
        
        $footer_forth = footer_forth::where('status',1)->get();
        $data['footer_forth'] = $footer_forth;
        
        $footer_fifth = footer_fifth::where('status',1)->get();
        $data['footer_fifth'] = $footer_fifth;
        
        return view('blog',$data);
    }
}
