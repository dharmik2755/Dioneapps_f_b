<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\we_expert;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class we_expert_Controller extends Controller
{
    public function create(Request $res)
    {
        if (isset($res->save)) {
            $title  = $res->title;
            $description = $res->description;
            $image = $res->file('image');
            $image_name = rand(0, 999999) . $image->getClientOriginalName('image');
            $image->move('upload', $image_name);

            $data = array('title' => $title, 'description' => $description, 'image' => $image_name);



            we_expert::insert($data);
            return redirect()->route('we-are-expert.view');
        }
        return view('Admin.we_are_expert.add_data');
    }

    public function show(Request $res)
    {
        $we_are_expert = we_expert::get();
        return view('Admin.we_are_expert.view_data', compact('we_are_expert'));
    }

    public function edit(Request $res, $id)
    {
        $we_expert = we_expert::where('id',$id)->get();
        $old_image = $we_expert->first();
        $old_image_path = 'upload/'.$old_image->image;

        if (isset($res->save)) {

            $title = $res->title;
            $description = $res->description;
            $image = $res->file('image');
            if ($image=="") {
                $image_name = $old_image->image;
            } else {
                $image_name = rand(0,999999).$image->getClientOriginalName('image');
                $image->move('upload',$image_name);
                if (File::exists($old_image_path)) 
                {
                    File::delete($old_image_path);
                }
            }
            $data = array('title' => $title , 'description' => $description , 'image' => $image_name );

            // echo '<per>';
            // print_r($data);
            // die();


            we_expert::where('id',$id)->update($data);

            return redirect()->route('we-are-expert.view');
        }

        return view('Admin.we_are_expert.edit_data',compact('we_expert'));
    }

    public function destroy(Request $res,$id)
    {
        $we_expert = we_expert::find($id);
        $old_image_path = 'upload/'.$we_expert->image;
        if(File::exists($old_image_path)) 
        {
            File::delete($old_image_path);
        }
        $we_expert->delete();
        return redirect()->route('we-are-expert.view');
    }

    public function active_and_deactive(Request $res)
    {
        $user = we_expert::find($res->id);
        $user->ststus = $res->status;
        $user->save();

        return response()->json(['success' => 'Status Change Successfully']);
    }
}
