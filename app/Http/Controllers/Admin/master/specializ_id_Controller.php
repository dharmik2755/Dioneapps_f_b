<?php

namespace App\Http\Controllers\Admin\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\specializ_id;
use App\Models\specialized;

class specializ_id_Controller extends Controller
{

    // public function create(Request $res)
    // {

    //     // if(isset($res->add)){
             

    //     // }

    //     return view('Admin.master.specializad.add_data');
    // }
    // public function insert(Request $res) 
    // {
    //     $development_name = $res->development_name;

    //         $data = array('development_name' => $development_name );
    //         specializ_id::insert($data);

    //         // return redirect()->route('specializ_id.view');
    // }

    public function add_and_show(Request $res)
    {
            if(isset($res->add)){
                $development_name = $res->development_name;

               $data = array('development_name' => $development_name );
               specializ_id::insert($data);

            //    return redirect()->route('specializ_id.view');

           }

        $specializ_show = specializ_id::get();

        return view('Admin.master.specializad.view_data', compact('specializ_show'));
    }

    public function destroy(Request $res, $id)
    {
        specializ_id::where('id', $id)->delete();
        return redirect()->route('specializ_id.view');
    }

    public function active_and_deactive(Request $res)
    {
        $user = specializ_id::find($res->id);
        $user->status = $res->status;
        $user->save();

        return response()->json(['success'=>'Status change Successfully']); 
    }
}
