<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class about extends Controller
{
    // about us page
    public function about(Request $res)
    {
        return view('about');
    }
}
