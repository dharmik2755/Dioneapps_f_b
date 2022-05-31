<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\our_services;
use App\Models\services_offer;
use App\Models\service_page;
use App\Models\contacts;


class service extends Controller
{
    // service us page
    public function service(Request $res)
    {
        $service_page = service_page::where('status',1)->get();
        $data['service_page'] = $service_page;

        $our_service = our_services::where('status',1)->get();
        $data['our_services'] = $our_service;

        $services_offer = services_offer::where('status',1)->get();
        $data['services_offer'] = $services_offer;

        $contact = contacts::get();
        $data['contact'] = $contact;

        return view('service',$data);
    }
}
