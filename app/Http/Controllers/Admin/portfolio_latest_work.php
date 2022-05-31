<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\portfolio_latest_works;

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
            }

            $data = array('title' => $title , 'color_image' => $color_image_name ,  'black_image' => $black_image_name );

            portfolio_latest_works::where('id',$id)->update($data);
            return redirect()->route('Latest-Work.view');
        }
        return view('Admin.portfolio_our_latest_creative_work.edit',$data);
    }

    
    public function destroy(Request $res,$id)
    {
        portfolio_latest_works::where('id',$id)->delete();
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
