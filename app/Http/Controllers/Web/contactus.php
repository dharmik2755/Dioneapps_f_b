<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactus extends Controller
{
    // contact us page
    public function contactus(Request $res)
    {
        return view('contactus');
    }
}
