<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact_media_info;
use App\Models\our_services;
use App\Models\services_offer;
use App\Models\service_page;
use App\Models\contacts;
use App\Models\footer_first;
use App\Models\footer_secound;
use App\Models\footer_forth;
use App\Models\footer_fifth;
use App\Models\user_contacts;


class service extends Controller
{
    // service us page
    public function service(Request $res)
    {
        $service_page = service_page::where('status', 1)->get();
        $data['service_page'] = $service_page;

        $our_service = our_services::where('status', 1)->get();
        $data['our_services'] = $our_service;

        $services_offer = services_offer::where('status', 1)->get();
        $data['services_offer'] = $services_offer;

        $contact_media_info = contact_media_info::get();
        $data['contact_media_info'] = $contact_media_info;

        $contact = contacts::get();
        $data['contact'] = $contact;

        $footer_first = footer_first::where('status', 1)->get();
        $data['footer_first'] = $footer_first;

        $footer_secound = footer_secound::where('status', 1)->get();
        $data['footer_secound'] = $footer_secound;

        $footer_forth = footer_forth::where('status', 1)->get();
        $data['footer_forth'] = $footer_forth;

        $footer_fifth = footer_fifth::where('status', 1)->get();
        $data['footer_fifth'] = $footer_fifth;

        if (isset($res->contact)) {
            // dd('ifuwheiofuch');
            $name = $res->name;
            $phone_number = $res->phone_number;
            $email = $res->email;
            $message = $res->message;

            $data = array('name' => $name, 'phone_number' => $phone_number, 'email' => $email, 'message' => $message);

            user_contacts::insert($data);

            return redirect('/');
        }

        return view('service', $data);
    }
}
