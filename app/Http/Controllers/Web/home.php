<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class home extends Controller
{
    // home page
    public function home(Request $res)
    {
        return view('index');
    }
}
