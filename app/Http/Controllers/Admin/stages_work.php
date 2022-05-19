<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\stages_of_work;


class stages_work extends Controller
{
    // add
    public function create(Request $res)
    {
        if (isset($res->save)) 
        {
            
            $title = $res->title;
            $sub_title = $res->sub_title;
            $stages1 = $res->stages1;
            $description1 = $res->description1;
            $stages2 = $res->stages2;
            $description2 = $res->description2;
            $stages3 = $res->stages3;
            $description3 = $res->description3;
            $stages4 = $res->stages4;
            $description4 = $res->description4;

            $data = array('title' => $title , 'sub_title' => $sub_title , 
                                                'stages1' => $stages1 , 
                                                'description1' => $description1 , 
                                                'stages2' => $stages2 , 
                                                'description2' => $description2 ,
                                                'stages3' => $stages3 , 
                                                'description3' => $description3 ,
                                                'stages4' => $stages4 , 
                                                'description4' => $description4 );

            // echo"<per>";
            // print_r($data);
            // die();
            stages_of_work::insert($data);
            
            return redirect()->route('stages.view');
        }
        return view('Admin.stages_of_work.add_work_data');
    }
    
    public function show(Request $id)
    {
        $show_data = stages_of_work::get();
        return view('Admin.stages_of_work.view_work_data',['stages_data'=>$show_data]);
    }

    
    public function edit(Request $res,$id)
    {
        $edit_data = stages_of_work::where('id',$id)->get();
        if (isset($res->edit)) 
        {
            
            $title = $res->title;
            $sub_title = $res->sub_title;
            $stages1 = $res->stages1;
            $description1 = $res->description1;
            $stages2 = $res->stages2;
            $description2 = $res->description2;
            $stages3 = $res->stages3;
            $description3 = $res->description3;
            $stages4 = $res->stages4;
            $description4 = $res->description4;

            $data = array('title' => $title , 'sub_title' => $sub_title , 
                                                'stages1' => $stages1 , 
                                                'description1' => $description1 , 
                                                'stages2' => $stages2 , 
                                                'description2' => $description2 ,
                                                'stages3' => $stages3 , 
                                                'description3' => $description3 ,
                                                'stages4' => $stages4 , 
                                                'description4' => $description4 );

            stages_of_work::where('id',$id)->update($data);
            
            return redirect()->route('stages.view');
        }
        return view('Admin.stages_of_work.edit_work_data',['edit_stages_data'=>$edit_data]);
    }

    
    public function destroy(Request $res,$id)
    {
        stages_of_work::where('id',$id)->delete();
        return redirect()->route('stages.view');
    }
}
