<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\specialized;
use App\Models\specializ_id;
use Illuminate\Support\Facades\File;

class specializeds_Controller extends Controller
{

    public function create(Request $res)
    {

        if (isset($res->add)) {

            $special_id = $res->special_id;
            $image = $res->file('image');
            $image_name = rand(0, 999999) . $image->getClientOriginalName('image');
            $image->move('upload', $image_name);


            $data = array('special_id' => $special_id, 'image' => $image_name);
            specialized::insert($data);

            return redirect()->route('specialized.view');
        }

        $show_specializ_id = specializ_id::where('status', 1)->get();
        return view('Admin.specialized.add_data', compact('show_specializ_id'));
    }


    public function show(Request $res)
    {
        $show_specializ_id = specializ_id::where('status', 1)->get();
        $show_specialized = specialized::get();
        return view('Admin.specialized.view_data', compact('show_specialized','show_specializ_id'));
    }


    public function edit(Request $res, $id)
    {
        $show_specializ_id = specializ_id::where('status', 1)->get();
        $edit_data_show = specialized::where('id',$id)->get();
        $old_image = $edit_data_show->first();
        $old_image_path = 'upload/'.$old_image->image;

        if (isset($res->save)) {

            $special_id = $res->special_id;
            $image = $res->file('image');
            if ($image == "") {
                $image_name = $old_image->image;
            } else {
                $image_name = rand(0, 999999) . $image->getClientOriginalName('image');
                $image->move('upload', $image_name);
                if (File::exists($old_image_path)) {
                    File::delete($old_image_path);
                }
            }
            $data = array('special_id' => $special_id , 'image' => $image_name );
            specialized::where('id',$id)->update($data);

            return redirect()->route('specialized.view');
        }
        return view('Admin.specialized.edit_data', compact('edit_data_show', 'show_specializ_id'));
    }

    public function destroy(Request $res,$id)
    {
        $specialized_delete = specialized::find($id);
        $old_image_path = 'upload/'.$specialized_delete->image;
        if (File::exists($old_image_path)) {
            File::delete($old_image_path);
        }
        $specialized_delete->delete();
        return redirect()->route('specialized.view');
    }
    public function active_and_deactive(Request $res)
    {
        $user = specialized::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success' => 'Status Change Successfully']);
    }
}
