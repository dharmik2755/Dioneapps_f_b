<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\footer_secound;

class footer_secound_controller extends Controller
{
    
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            $title = $res->title;
            
            $array_of_services = $res->input('services');
            $services_data = implode('|||',$array_of_services);

            $data = array('title' => $title ,'services' =>$services_data );
            footer_secound::insert($data);

            return redirect()->route('footer-secound.view');
        }
        return view('Admin.footer.secound-part.add');
    }

    
    public function show(Request $res)
    {
        $footer_secound = footer_secound::get();
        return view('Admin.footer.secound-part.view',compact('footer_secound'));
    }

    
    public function edit(Request  $res,$id)
    {
        $footer_secound = footer_secound::where('id',$id)->get();

        if (isset($res->edit)) 
        {
            $title = $res->title;
            $array_of_services = $res->input('services');
            $services_data = implode('|||',$array_of_services);

            $data = array('title' => $title ,'services' =>$services_data );
            footer_secound::where('id',$id)->update($data);


            return redirect()->route('footer-secound.view');
        }
        return view('Admin.footer.secound-part.edit',compact('footer_secound'));
    }

    
    public function destroy(Request $res,$id)
    {
        footer_secound::where('id',$id)->delete();
        
        return redirect()->route('footer-secound.view');
    }

    public function active_and_deactive(Request $res)
    {
        $user = footer_secound::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
