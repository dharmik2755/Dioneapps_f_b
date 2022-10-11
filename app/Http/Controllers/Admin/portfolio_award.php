<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\portfolio_awards;
use Illuminate\Support\Facades\File;

class portfolio_award extends Controller
{
    public function create(Request $res)
    {
        if (isset($res->add)) 
        {
            $title = $res->title;
            $description = $res->description;
            if ($res->file('image')) 
           {
               foreach ($res->file('image') as $image) 
               {
                    $image_name = rand(0,999999).$image->getClientOriginalName('image');
                    $image->move('upload/',$image_name);
                    $image_multi_data[] = $image_name;
               }
           }
            
            $data = array('title' => $title , 'description' => $description , 'image' => implode('|||',$image_multi_data));
            portfolio_awards::insert($data);

            return redirect()->route('portfolio-awards.view');
        }
        return view('Admin.portfolio_awards.create');
    }


    public function show(Request $res)
    {
        $portfolio_awards = portfolio_awards::get();
        $data['portfolio_awards'] = $portfolio_awards;

        return view('Admin.portfolio_awards.view',$data);
    }

    
    
    public function edit(Request $res,$id)
    {
        $portfolio_awards = portfolio_awards::where('id',$id)->get();
        $data['portfolio_awards'] = $portfolio_awards;
        $old_image = $portfolio_awards->first();

        if (isset($res->edit)) 
        {
            $title = $res->title;
            $description = $res->description;
            $image = $res->file('image');
           if ($image=="") 
           {
               $image_name = $old_image->image;
               $image_multi_data[] = $image_name;
           }
           else
           {
                foreach ($res->file('image') as $image) 
                {
                    $image_name = rand(0,999999).$image->getClientOriginalName('image');
                    $image->move('upload/',$image_name);
                    $image_multi_data[] = $image_name;
                }
                foreach(explode('|||', $old_image->image) as $img)
                { 
                    if (File::exists(public_path('upload/').$img))
                    {
                        File::delete(public_path('upload/').$img);
                    }
                }
           }
            
            $data = array('title' => $title , 'description' => $description , 'image' => implode('|||',$image_multi_data));
            portfolio_awards::where('id',$id)->update($data);

            return redirect()->route('portfolio-awards.view');
        }
        return view('Admin.portfolio_awards.edit',$data);
    }

    
    
    public function destroy(Request $res,$id)
    {
        $portfolio_awards = portfolio_awards::find($id);
        foreach(explode('|||', $portfolio_awards->image) as $img)
        { 
            if (File::exists(public_path('upload/').$img))
            {
                File::delete(public_path('upload/').$img);
            }
        }
        $portfolio_awards->delete();
        return redirect()->route('portfolio-awards.view');
    }
    
    // active_and_deactive
    public function active_and_deactive(Request $res)
    {
        $user = portfolio_awards::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
