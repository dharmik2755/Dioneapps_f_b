<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\contact_media_info;
use Illuminate\Http\Request;
use App\Models\footer_first;
use App\Models\footer_secound;
use App\Models\footer_forth;
use App\Models\footer_fifth;
use App\Models\mobile;
use App\Models\app_develop_title;
use App\Models\features_development;
use App\Models\web_develop_title;
use App\Models\uiux_develop_title;
use App\Models\project_contact_Controllers;
use App\Models\company_work_features;
use App\Models\specialized;
use App\Models\portfolio_latest_works;
use App\Models\company_project;
use App\Models\specializ_id;
use App\Models\our_services;

class development extends Controller
{
    public function development(Request $res, $id)
    {
        $special_id =  request()->segment(2);

        $development_data = mobile::where('special_id', $id)->get();
        $contact_media_info = contact_media_info::get();
        $project_detail = project_contact_Controllers::where('status', 1)->get();
        $footer_first = footer_first::where('status', 1)->get();
        $footer_secound = footer_secound::where('status', 1)->get();
        $footer_forth = footer_forth::where('status', 1)->get();
        $footer_fifth = footer_fifth::where('status', 1)->get();
        $app_develop_title = app_develop_title::where([['status', 1], ['special_id', '=', $special_id]])->get();
        $web_develop_title = web_develop_title::where([['status', 1], ['special_id', '=', $special_id]])->get();
        $uiux_develop_title = uiux_develop_title::where([['status', 1], ['special_id', '=', $special_id]])->get();
        $features_development = features_development::where([['status', 1], ['special_id', '=', $special_id]])->get();
        $company_work_features = company_work_features::where([['status', 1], ['special_id', '=', $special_id]])->get();
        $specialized = specialized::where([['status', 1], ['special_id', '=', $special_id]])->get();
        $portfolio_latest_works = portfolio_latest_works::where([['status', 1], ['special_id', '=', $special_id]])->get();
        $company_project = company_project::where([['status', 1], ['special_id', '=', $special_id]])->get();
        $specializ_id = specializ_id::where('status', 1)->get();
        $our_services = our_services::where('status', 1)->get();

        return view('development', compact('development_data', 'contact_media_info', 'project_detail', 'footer_first', 'footer_secound', 'footer_forth', 'footer_fifth', 'app_develop_title', 'web_develop_title', 'uiux_develop_title', 'features_development', 'company_work_features', 'specialized', 'portfolio_latest_works', 'company_project', 'specializ_id', 'our_services'));
    }
}
