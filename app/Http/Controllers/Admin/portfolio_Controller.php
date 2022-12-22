<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\portfolio;
use Illuminate\Http\Request;
use App\Models\portfolio_model;
use Illuminate\Support\Facades\File;

class portfolio_Controller extends Controller
{
    
    public function create(Request $res)
    {
        if (isset($res->add)) {

            $title = $res->title;
            $description = $res->description;
            $service_type = $res->service_type;
            $playstore_link = $res->playstore_link;
            $appstore_link = $res->appstore_link;
            $web_link = $res->web_link;
            if ($res->input('graphics')=="") {
                $array_graphics = "";
            } else {
                $graphics = $res->input('graphics');
                $array_graphics = implode(',' , $graphics);
            }
            $image = $res->file('image');
            $image_name = rand(0,999999).$image->getClientOriginalName('image');
            $image->move('upload/',$image_name);

            $data = array('title' => $title , 'description' => $description , 'service_type' => $service_type , 'playstore_link' => $playstore_link , 'appstore_link' => $appstore_link , 'web_link' => $web_link , 'graphic' =>  $array_graphics , 'image' => $image_name );

            // echo"<pre>";
            // print_r($data);
            // die();
            portfolio_model::insert($data);

            return redirect()->route('portfolio.view');
        }
        return view('Admin.portfolio.add');
    }

    public function show()
    {
        $portfolio = portfolio_model::get();
        return view('Admin.portfolio.view', compact('portfolio'));
    }

    public function edit(Request $res,$id)
    {
        $portfolio = portfolio_model::where('id',$id)->get();
        $old_image = $portfolio->first();
        $old_image_path = 'upload/'.$old_image->image;

        if (isset($res->edit)) {

            $title = $res->title;
            $description = $res->description;
            $service_type = $res->service_type;
            $playstore_link = $res->playstore_link;
            $appstore_link = $res->appstore_link;
            $web_link = $res->web_link;
            if ($res->input('graphics')=="") {
                $array_graphics = "";
            } else {
                $graphics = $res->input('graphics');
                $array_graphics = implode(',' , $graphics);
            }
            $image = $res->file('image');
            if($image=="") {
                $image_name = $old_image->image;
            } else {
                $image_name = rand(0,999999).$image->getClientOriginalName('image');
                $image->move('upload', $image_name);
                if (File::exists($old_image_path)) 
                {
                    File::delete($old_image_path);
                }
            }

            $data = array('title' => $title , 'description' => $description , 'service_type' => $service_type , 'playstore_link' => $playstore_link , 'appstore_link' => $appstore_link , 'web_link' => $web_link , 'graphic' =>  $array_graphics , 'image' => $image_name );

            // echo '<pre>';
            // print_r($data);
            // die();

            portfolio_model::where('id',$id)->update($data);

            return redirect()->route('portfolio.view');
        }

        return view('Admin.portfolio.edit', compact('portfolio'));
    }

    public function destroy(Request $res,$id)
    {
        $portfolio = portfolio_model::find($id);
        $old_image_path = 'upload/'.$portfolio->image;
        if (File::exists($old_image_path)) 
        {
            File::delete($old_image_path);
        }
        $portfolio->delete();
        return redirect()->route('portfolio.view');
    }

    public function active_and_deactive(Request $res)
    {
        $user = portfolio_model::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

}
