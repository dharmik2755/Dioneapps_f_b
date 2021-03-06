<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\footer_fifth;
use Illuminate\Support\Facades\File;

class footer_fifth_controller extends Controller
{
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            $link = $res->link;
            $image = $res->file('image');
            $image_name = rand(0,999999).$image->getClientOriginalName('image');
            $image->move('upload/',$image_name);
            
            $data = array('link' => $link ,'image' =>$image_name );
            footer_fifth::insert($data);

            return redirect()->route('footer-fifth.view');
        }
        return view('Admin.footer.fifth-part.add');
    }

    
    public function show(Request $res)
    {
        $footer_fifth = footer_fifth::get();
        return view('Admin.footer.fifth-part.view',compact('footer_fifth'));
    }

    
    public function edit(Request $res,$id)
    {
        $footer_fifth = footer_fifth::where('id',$id)->get();
        $old_image = $footer_fifth->first();
        $old_img_path = 'upload/'.$old_image->image;

        if (isset($res->edit)) 
        {
            $link = $res->link;
            $image = $res->file('image');
            
            if($image=="")
            {
                $image_name = $old_image->image;
            }
            else
            {
                $image_name = rand(0,999999).$image->getClientOriginalName('image');
                $image->move('upload/',$image_name);
                if(File::exists($old_img_path)) 
                {
                    File::delete($old_img_path);
                }
            }
            
            
            $data = array('link' => $link ,'image' =>$image_name );
            footer_fifth::where('id',$id)->update($data);

            return redirect()->route('footer-fifth.view');
        }
        return view('Admin.footer.fifth-part.edit',compact('footer_fifth'));
    }

    
    public function destroy(Request $res,$id)
    {
        $footer_fifth = footer_fifth::find($id);
        $old_image_path = 'upload/'.$footer_fifth->image;
        if (File::exists($old_image_path)) 
        {
            File::delete($old_image_path);
        }
        $footer_fifth->delete();
        return redirect()->route('footer-fifth.view');
    }

    public function active_and_deactive(Request $res)
    {
        $user = footer_fifth::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

    
}
