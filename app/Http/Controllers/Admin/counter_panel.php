<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\counter;

class counter_panel extends Controller
{
    
    public function create(Request $res)
    {
        if(isset($res->add))
        {
            $clients = $res->clients;
            $projects = $res->projects;
            $employees = $res->employees;
            $branches = $res->branches;
            
            $data = array('clients' =>  $clients , 'projects' => $projects , 'employees' => $employees , 'branches' => $branches);

            counter::insert($data);
            return redirect()->route('counter.create');
        }
        return view('Admin.counter_panel.add_counter_data');
    }

    
    public function show(Request $id)
    {
        $data = counter::get();
        return view('Admin.counter_panel.view_counter_data',['counter_data'=>$data]);
    }

    
    public function edit(Request $res,$id)
    {
        $edit_data = counter::get();

        if(isset($res->update))
        {
            $clients = $res->clients;
            $projects = $res->projects;
            $employees = $res->employees;
            $branches = $res->branches;
            
            $data = array('clients' =>  $clients , 'projects' => $projects , 'employees' => $employees , 'branches' => $branches);

            counter::where('id',$id)->update($data);
            return redirect()->route('counter.view');
        }

        return view('Admin.counter_panel.edit_counter_data',['counter_data'=>$edit_data]);
    }

    
    public function destroy($id)
    {
        //
    }
}
