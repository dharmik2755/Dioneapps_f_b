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

            $image1 = $res->file('image1');
            $image_name1 = rand(0, 999999) . $image1->getClientOriginalName('image1');
            $image1->move('upload', $image_name1);

            $image2 = $res->file('image2');
            $image_name2 = rand(0, 999999) . $image2->getClientOriginalName('image2');
            $image2->move('upload', $image_name2);
            
            $image3 = $res->file('image3');
            $image_name3 = rand(0, 999999) . $image3->getClientOriginalName('image3');
            $image3->move('upload', $image_name3);

            $data = array('title' => $title, 'description' => $description, 'image1' => $image_name1 , 'image2' => $image_name2 ,'image3' => $image_name3);

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
        $old_image_path1 = 'upload/'.$old_image->image1;
        $old_image_path2 = 'upload/'.$old_image->image2;
        $old_image_path3 = 'upload/'.$old_image->image3;

        if (isset($res->save)) {

            $title = $res->title;
            $description = $res->description;

            $image1 = $res->file('image1');
            if ($image1=="") {
                $image_name1 = $old_image->image1;
            } else {
                $image_name1 = rand(0,999999).$image1->getClientOriginalName('image1');
                $image1->move('upload',$image_name1);
                if (File::exists($old_image_path1)) 
                {
                    File::delete($old_image_path1);
                }
            }
            $image2 = $res->file('image2');
            if ($image2=="") {
                $image_name2 = $old_image->image2;
            } else {
                $image_name2 = rand(0,999999).$image2->getClientOriginalName('image2');
                $image2->move('upload',$image_name2);
                if (File::exists($old_image_path2)) 
                {
                    File::delete($old_image_path2);
                }
            }
            $image3 = $res->file('image3');
            if ($image3=="") {
                $image_name3 = $old_image->image3;
            } else {
                $image_name3 = rand(0,999999).$image3->getClientOriginalName('image3');
                $image3->move('upload',$image_name3);
                if (File::exists($old_image_path3)) 
                {
                    File::delete($old_image_path3);
                }
            }

            $data = array('title' => $title , 'description' => $description , 'image1' => $image_name1 , 'image2' => $image_name2 , 'image3' => $image_name3 );

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
