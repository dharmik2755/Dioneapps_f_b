<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class career extends Controller
{
    //career page
    public function career(Request $res)
    {
        return view('career');
    }
}
