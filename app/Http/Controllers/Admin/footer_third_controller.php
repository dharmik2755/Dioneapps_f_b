<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class footer_third_controller extends Controller
{
    
    public function create(Request $res)
    {
        return view('Admin.footer.third-part.add');
    }

    
    public function show(Request $res)
    {
        return view('Admin.footer.third-part.view');
    }

    
    public function edit(Request $res,$id)
    {
        return view('Admin.footer.third-part.edit');
    }

    
    public function destroy($id)
    {
    
    }

    public function active_and_deactive(Request $res)
    {
    }
}
