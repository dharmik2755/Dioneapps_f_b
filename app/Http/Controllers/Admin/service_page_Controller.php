<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service_page;

class service_page_Controller extends Controller
{
   
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            $title = $res->title;
            $description = $res->description;

            $data = array('title' => $title , 'description' => $description );

            service_page::insert($data);

            return redirect()->route('services.view');

        }
        return view('Admin.services_page.add_services_page');
    }

    
    public function show(Request $id)
    {
        $service_page = service_page::get();
        $data['service_page'] = $service_page;

        return view('Admin.services_page.view_services_page',$data);
    }

    
    public function edit(Request $res,$id)
    {
        $service_page = service_page::where('id',$id)->get();
        $data['service_page'] = $service_page;
        if (isset($res->edit)) 
        {
            $title = $res->title;
            $description = $res->description;

            $data = array('title' => $title , 'description' => $description );

            service_page::where('id',$id)->update($data);

            return redirect()->route('services.view');

        }
        return view('Admin.services_page.edit_services_page',$data);
    }

   
    public function destroy(Request $res,$id)
    {
        service_page::where('id',$id)->delete();

        return redirect()->route('services.view');

    }
    
    // active and deactive
    public function active_and_deactive(Request $res)
    {
        $user = service_page::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
