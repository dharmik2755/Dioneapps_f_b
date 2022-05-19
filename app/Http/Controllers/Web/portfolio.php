<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class portfolio extends Controller
{
   // portfolio us page
   public function portfolio(Request $res)
   {
       return view('portfolio');
   }
}
