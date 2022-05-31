<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\career_page_perkss;

class career_page_perks extends Controller
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

           $array_of_sub_title = $res->input('sub_title');
           $sub_title_data = implode('|||',$array_of_sub_title);

           $array_of_sub_description = $res->input('sub_description');
           $sub_description_data = implode('|||',$array_of_sub_description);

           $data = array('title' => $title , 'description' => $description , 'image' => implode('|||',$image_multi_data) , 'sub_title' => $sub_title_data , 'sub_description' => $sub_description_data );

        //    echo "<per>";
        //    print_r($data);
        //    die();

           career_page_perkss::insert($data);


            return redirect()->route('career-perks.view');
        }

        return view('Admin.career_page_perks.add_career_page_perks');
    }

    
    public function show(Request $res)
    {
        $get_data = career_page_perkss::get();
        $data['career_page_perkss'] = $get_data;
        return view('Admin.career_page_perks.view_career_page_perks',$data);
    }

    
    public function edit(Request $res,$id)
    {
        $get_data = career_page_perkss::where('id',$id)->get();
        $data['career_page_perkss'] = $get_data;
        $old_image = $get_data->first();

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
           else{
            foreach ($res->file('image') as $image) 
            {
                 $image_name = rand(0,999999).$image->getClientOriginalName('image');
                 $image->move('upload/',$image_name);
                 $image_multi_data[] = $image_name;     
            }
           }

           $array_of_sub_title = $res->input('sub_title');
           $sub_title_data = implode('|||',$array_of_sub_title);

           $array_of_sub_description = $res->input('sub_description');
           $sub_description_data = implode('|||',$array_of_sub_description);

           $data = array('title' => $title , 'description' => $description , 'image' => implode('|||',$image_multi_data) , 'sub_title' => $sub_title_data , 'sub_description' => $sub_description_data );

        //    echo "<per>";
        //    print_r($data);
        //    die();
           career_page_perkss::where('id',$id)->update($data);
            return redirect()->route('career-perks.view');
        }
        return view('Admin.career_page_perks.edit_career_page_perks',$data);
    }

    
    public function destroy(Request $res,$id)
    {
        career_page_perkss::where('id',$id)->delete();
        return redirect()->route('career-perks.view');
    }

    public function active_and_deactive(Request $res)
    {
        $user = career_page_perkss::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
