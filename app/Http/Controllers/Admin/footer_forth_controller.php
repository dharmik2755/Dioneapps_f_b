<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\footer_forth;

class footer_forth_controller extends Controller
{
    
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            $link = $res->link;
            $description = $res->description;
            
            $data = array('link' => $link ,'description' =>$description );
            footer_forth::insert($data);

            return redirect()->route('footer-forth.view');
        }
        return view('Admin.footer.forth-part.add');
    }

    
    public function show(Request $res)
    {
        $footer_forth = footer_forth::get();
        return view('Admin.footer.forth-part.view',compact('footer_forth'));
    }

    
    public function edit(Request $res,$id)
    {
        $footer_forth = footer_forth::where('id',$id)->get();

        if (isset($res->edit)) 
        {
            $link = $res->link;
            $description = $res->description;
            
            $data = array('link' => $link ,'description' =>$description );
            footer_forth::where('id',$id)->update($data);

            return redirect()->route('footer-forth.view');
        }
        return view('Admin.footer.forth-part.edit',compact('footer_forth'));
    }

    
    public function destroy($id)
    {
        footer_forth::where('id',$id)->delete();
        return redirect()->route('footer-forth.view');
    }

    public function active_and_deactive(Request $res)
    {
        $user = footer_forth::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
