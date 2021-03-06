<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients;
use Illuminate\Support\Facades\File;

class our_clients extends Controller
{
    // add
    public function create(Request $res)
    {
        if(isset($res->add)){
            $name = $res->name;
            $profession =$res->profession;
            $information =$res->information;
            $description =$res->description;
            $image = $res->file('image');
            $image_name = rand(0,999999).$image->getClientOriginalName('image');
            $image->move('upload/',$image_name);

            $data = array('name' => $name , 'profession' => $profession , 'information' => $information , 'description' => $description , 'image' => $image_name );
            clients::insert($data);

            return redirect()->route('clients.view');

        }
        return view('Admin.our_clients.add_clients_data');
    }

    
    public function show(Request $id)
    {
        $show_data = clients::get();
        return view('Admin.our_clients.view_clients_data',['clients_data'=>$show_data]);
    }

    
    public function edit(Request $res,$id)
    {
        $edit_data = clients::where('id',$id)->get();
        $old_image = $edit_data->first();
        $old_image_path = 'upload/'.$old_image->image;

       if(isset($res->update))
       {
            $name = $res->name;
            $profession =$res->profession;
            $information =$res->information;
            $description =$res->description;
            $image = $res->file('image');
            if($image=="")
            {
                $image_name = $old_image->image;
            }
            else
            {
                $image_name = rand(0,999999).$image->getClientOriginalName('image');
                $image->move('upload/',$image_name);
                if (File::exists($old_image_path)) 
                {
                    File::delete($old_image_path);
                }
            }

            $data = array('name' => $name , 'profession' => $profession , 'information' => $information , 'description' => $description , 'image' => $image_name );
            clients::where('id',$id)->update($data);

            return redirect()->route('clients.view');

        }
       return view('Admin.our_clients.edit_clients_data',['clients_edit'=>$edit_data]);
    }

    
    public function destroy(Request $res,$id)
    {
        $clients = clients::find($id);
        $old_image_path = 'upload/'.$clients->image;
        if (File::exists($old_image_path)) 
        {
            File::delete($old_image_path);
        }
        $clients->delete();
        return redirect()->route('clients.view');
    }
    //active and deactive button
    public function active_and_deactive(Request $res)
    {
        $user = clients::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
