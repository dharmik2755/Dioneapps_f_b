<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\portfolio_latest_works;
use Illuminate\Support\Facades\File;

class portfolio_latest_work extends Controller
{
    
    public function create (Request $res) {

        if (isset($res->add)) {
            
            $title = $res->title;

            $color_image = $res->file('color_image');
            $color_image_name = rand(0,999999).$color_image->getClientOriginalName('color_image');
            $color_image->move('upload/',$color_image_name);
            
            $black_image = $res->file('black_image');
            $black_image_name = rand(0,999999).$black_image->getClientOriginalName('black_image');
            $black_image->move('upload/',$black_image_name);

            $data = array('title' => $title , 'color_image' => $color_image_name ,  'black_image' => $black_image_name );

            
            // echo"<per>";
            // print_r($data);
            // die();
            
            portfolio_latest_works::insert($data);
            return redirect()->route('Latest-Work.view');
        }
        return view('Admin.portfolio_our_latest_creative_work.create');
    }

    public function show(Request $res)
    {
        $portfolio_latest_works = portfolio_latest_works::get();
        $data['portfolio_latest_works'] = $portfolio_latest_works;
        return view('Admin.portfolio_our_latest_creative_work.view',$data);
    }

    
    public function edit(Request $res,$id)
    {
        $portfolio_latest_works = portfolio_latest_works::where('id',$id)->get();
        $data['portfolio_latest_works'] = $portfolio_latest_works;
        $old_image = $portfolio_latest_works->first();
        $old_color_image_path = 'upload/'.$old_image->color_image;
        $old_black_image_path = 'upload/'.$old_image->black_image;

        if (isset($res->edit)) 
        {
            $title = $res->title;

            $color_image = $res->file('color_image');
            if ($color_image=="") 
            {
                $color_image_name = $old_image->color_image; 
            }
            else{
                $color_image_name = rand(0,999999).$color_image->getClientOriginalName('color_image');
                $color_image->move('upload/',$color_image_name);
                if (File::exists($old_color_image_path)) 
                {
                    File::delete($old_color_image_path);
                }
            }
            
            $black_image = $res->file('black_image');
            if ($black_image=="") 
            {
                $black_image_name = $old_image->black_image;
            }
            else
            {
                $black_image_name = rand(0,999999).$black_image->getClientOriginalName('black_image');
                $black_image->move('upload/',$black_image_name);
                if (File::exists($old_black_image_path)) 
                {
                    File::delete($old_black_image_path);
                }
            }

            $data = array('title' => $title , 'color_image' => $color_image_name ,  'black_image' => $black_image_name );

            portfolio_latest_works::where('id',$id)->update($data);
            return redirect()->route('Latest-Work.view');
        }
        return view('Admin.portfolio_our_latest_creative_work.edit',$data);
    }

    
    public function destroy(Request $res,$id)
    {
        $portfolio_latest_works = portfolio_latest_works::find($id);
        $old_color_image_path = 'upload/'.$portfolio_latest_works->color_image;
        $old_black_image_path = 'upload/'.$portfolio_latest_works->black_image;
        if (File::exists($old_color_image_path) || File::exists($old_black_image_path) ) 
        {
            File::delete($old_color_image_path,$old_black_image_path);
        }
        $portfolio_latest_works->delete();
        return redirect()->route('Latest-Work.view');
    }

    public function active_and_deactive(Request $res)
    {
        $user = portfolio_latest_works::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
