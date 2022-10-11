<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mobile;
use App\Models\specializ_id;
use Illuminate\Support\Facades\File;


class development_Controller extends Controller
{
    // add
    public function create(Request $res)
    {
        if (isset($res->save)) {
            $special_id = $res->special_id;
            $title = $res->title;
            $description = $res->description;
            $image1 = $res->file('image1');
            $image_name1 = rand(0, 999999) . $image1->getClientOriginalName('image1');
            $image1->move('upload', $image_name1);
            $image2 = $res->file('image2');
            $image_name2 = rand(0, 999999) . $image2->getClientOriginalName('image2');
            $image2->move('upload', $image_name2);

            $data = array('special_id' => $special_id, 'title' => $title, 'description' => $description, 'image1' => $image_name1, 'image2' => $image_name2);

            // echo '<pre>';
            // print_r($data);
            // die();

            mobile::insert($data);

            return redirect()->route('development.view');
        }
        $show_specializ_id = specializ_id::where('status', 1)->get();
        return view('Admin.development.add_development_data', compact('show_specializ_id'));
    }

    // show data
    public function show(Request $id)
    {
        $mobile = mobile::get();;
        $show_specializ_id = specializ_id::where('status', 1)->get();

        return view('Admin.development.view_development_data', compact('mobile','show_specializ_id'));
    }

    // edit
    public function edit(Request $res, $id)
    {
        $show_specializ_id = specializ_id::where('status', 1)->get();
        $update_data = mobile::where('id', $id)->get();
        $old_image = $update_data->first();
        $old_image_path1 = 'upload/' . $old_image->image1;
        $old_image_path2 = 'upload/' . $old_image->image2;

        if (isset($res->edit)) {
            $title = $res->title;
            $description = $res->description;
            $image1 = $res->file('image1');

            if ($image1 == "") {
                $image_name1 = $old_image->image1;
            } else {
                $image_name1 = rand(0, 999999) . $image1->getClientOriginalName('image1');

                $image1->move('upload', $image_name1);

                if (File::exists($old_image_path1)) {
                    File::delete($old_image_path1);
                }
            }

            $image2 = $res->file('image2');
            if ($image2 == "") {
                $image_name2 = $old_image->image2;
            } else {
                $image_name2 = rand(0, 999999) . $image2->getClientOriginalName('image2');
                $image2->move('upload', $image_name2);
                if (File::exists($old_image_path2)) {
                    File::delete($old_image_path2);
                }
            }


            $data = array('title' => $title, 'description' => $description, 'image1' => $image_name1, 'image2' => $image_name2);

            // echo '<pre>';
            // print_r($data);
            // die();

            mobile::where('id', $id)->update($data);

            return redirect()->route('development.view');
        }

        return view('Admin.development.edit_development_data', compact('update_data', 'show_specializ_id'));
    }

    // delete
    public function destroy(Request $res, $id)
    {
        $mobile =  mobile::find($id);
        $old_image_path1 = 'upload/'.$mobile->image1;
        $old_image_path2 = 'upload/'.$mobile->image2;

        if (File::exists($old_image_path1) || File::exists($old_image_path2)) {
            File::delete($old_image_path1,$old_image_path2);
        }
        $mobile->delete();
        return redirect()->route('development.view');
    }

    //  status insert in sata base
    public function active_and_deactive(Request $res)
    {
        $home = mobile::find($res->id);
        $home->status = $res->status;
        $home->save();

        return response()->json(['success' => 'Status change successfully.']);
    }
}
