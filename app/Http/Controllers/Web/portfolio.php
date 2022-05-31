<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\portfolio_awards;
use App\Models\project_contact_Controllers;
use App\Models\portfolio_latest_works;


class portfolio extends Controller
{
   // portfolio us page
   public function portfolio(Request $res,$page)
   {
        $portfolio_awards = portfolio_awards::where('status',1)->get();
        $data['portfolio_awards'] = $portfolio_awards;

        $project = project_contact_Controllers::where('status',1)->get();
        $data['project_detail'] = $project;

      //   limit set and where data start are define here
        $limit = 6;
        $start = ($page-1) * $limit;

      //  count get data for paginate
        $select_page = portfolio_latest_works::get();
        $count_data = $select_page->count();

      //   pagination limit and start 
        if (!($count_data>$limit)) {
           $page = 1;
        }
        
        $portfolio_latest_works = portfolio_latest_works::skip($start)->take($limit)->where('status',1)->get();
        $data['portfolio_latest_works'] = $portfolio_latest_works;

       return view('portfolio',$data)->with('record',$count_data)->with('page',$page);
   }
}
