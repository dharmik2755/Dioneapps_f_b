<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blog extends Controller
{
    public function blog(Request $request)
    {
        return view('blog');
    }
}
