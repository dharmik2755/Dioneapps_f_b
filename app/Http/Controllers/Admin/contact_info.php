<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact_media_info;

class contact_info extends Controller
{
    
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            $code = $res->code;
            $title_link = $res->title_link;
            $title = $res->title;
            $description = $res->description;

            $data = array('code' => $code , 'title_link' => $title_link , 'title' => $title , 'description' => $description );
            contact_media_info::insert($data);

            return redirect()->route('contact-information.view');
        }
        return view('Admin.contact_information.add_contact_info_data');
    }

    
    public function show(Request $id)
    {
        $get_data = contact_media_info::get();
        $data['contact_media_info'] = $get_data;
        return view('Admin.contact_information.view_contact_info_data',$data);
    }

    
    public function edit(Request $res,$id)
    {
        $get_data = contact_media_info::where('id',$id)->get();
        $data['contact_media_info'] = $get_data;

        if (isset($res->edit)) 
        {
            $code = $res->code;
            $title_link = $res->title_link;
            $title = $res->title;
            $description = $res->description;

            $data = array('code' => $code , 'title_link' => $title_link , 'title' => $title , 'description' => $description );
            contact_media_info::where('id',$id)->update($data);

            return redirect()->route('contact-information.view');
        }
        return view('Admin.contact_information.edit_contact_info_data',$data);
    }

    public function destroy(Request $res,$id)
    {
        contact_media_info::where('id',$id)->delete();
        return redirect()->route('contact-information.view');
    }
}
