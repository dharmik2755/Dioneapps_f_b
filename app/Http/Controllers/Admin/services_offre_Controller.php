<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\services_offer;
use Illuminate\Support\Facades\File;

class services_offre_Controller extends Controller
{
   
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            
            $title = $res->title;
            $description = $res->description;
            
            $sub_title_array = $res->input('sub_title');
            $data_sub_title = implode('|||',$sub_title_array);
            $sub_description = $res->sub_description;
            
            $image = $res->file('image');
            $image_name = rand(0,999999).$image->getClientOriginalName('image');
            $image->move('upload',$image_name); 

            $data = array('title' => $title , 'description' => $description , 'sub_title' => $data_sub_title , 'sub_description' => $sub_description , 'image' => $image_name );


            services_offer::insert($data);

            return redirect()->route('services-offer.view');

        }
        return view('Admin.services_offer.add_services_offer');
    }

    
    public function show(Request $res)
    {   
        $services_offer = services_offer::get();
        $data['services_offer'] = $services_offer;
        return view('Admin.services_offer.view_services_offer',$data);
    }

    
    public function edit(Request $res,$id)
    {   $edit_services_offer = services_offer::where('id',$id)->get();
        $data['edit_services_offer'] = $edit_services_offer;
        $old_image = $edit_services_offer->first();
        $old_image_path = 'upload/'.$old_image->image;

        if (isset($res->edit)) 
        {
            
            $title = $res->title;
            $description = $res->description;
            
            $sub_title_array = $res->input('sub_title');
            $data_sub_title = implode('|||',$sub_title_array);
            $sub_description = $res->sub_description;
            
            $image = $res->file('image');
            if ($image=="") 
            {
                $image_name = $old_image->image;
            }
            else{
                $image_name = rand(0,999999).$image->getClientOriginalName('image');
                $image->move('upload',$image_name); 
                if (File::exists($old_image_path)) 
                {
                    File::delete($old_image_path);
                }
            }

            $data = array('title' => $title , 'description' => $description , 'sub_title' => $data_sub_title , 'sub_description' => $sub_description , 'image' => $image_name );


            services_offer::where('id',$id)->update($data);

            return redirect()->route('services-offer.view');
        }
        return view('Admin.services_offer.edit_services_offer',$data);
    }

    
    public function destroy(Request $res,$id)
    {
        $services_offer = services_offer::find($id);
        $old_image_path = 'upload/'.$services_offer->image;
        if (File::exists($old_image_path)) 
        {
            File::delete($old_image_path);
        }
        $services_offer->delete();
        return redirect()->route('services-offer.view');
    }
    // active and deactive
    public function active_and_deactive(Request $res)
    {
        $user = services_offer::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
