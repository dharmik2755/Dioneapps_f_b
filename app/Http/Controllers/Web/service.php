<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class service extends Controller
{
    // service us page
    public function service(Request $res)
    {
        return view('service');
    }
}
