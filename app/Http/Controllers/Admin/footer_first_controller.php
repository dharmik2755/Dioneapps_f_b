<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\footer_first;

class footer_first_controller extends Controller
{
    
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            $title = $res->title;
            $description = $res->description;

            $data = array('title' => $title ,'description' =>$description );
            footer_first::insert($data);

            return redirect()->route('footer-first.view');
        }
        return view('Admin.footer.first-part.add');
    }

    
    public function show(Request $id)
    {
        $footer_first = footer_first::get();
        return view('Admin.footer.first-part.view',compact('footer_first'));
    }

    
    public function edit(Request $res,$id)
    {
        $footer_first = footer_first::where('id',$id)->get();

        if (isset($res->edit)) 
        {
            $title = $res->title;
            $description = $res->description;

            $data = array('title' => $title ,'description' =>$description );

            // echo"<per>";
            // print_r($data);
            // die();
            footer_first::where('id',$id)->update($data);

            return redirect()->route('footer-first.view');
        }
        return view('Admin.footer.first-part.edit',compact('footer_first'));
    }

    public function destroy(Request $res,$id)
    {
        footer_first::where('id',$id)->delete();
        
        return redirect()->route('footer-first.view');
    }

    public function active_and_deactive(Request $res)
    {
        $user = footer_first::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
