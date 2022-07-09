<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\footer_first;
use App\Models\footer_secound;
use App\Models\footer_forth;
use App\Models\footer_fifth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Paginator::useBootstrap();

        // $footer_first_use_outher_way = footer_first::where('status',1)->get();
        // view()->share('footer_first_use_outher',$footer_first_use_outher_way);

        // $footer_secound_use_outher_way = footer_secound::where('status',1)->get();
        // view()->share('footer_secound_use_outher',$footer_secound_use_outher_way);

        // $footer_forth_use_outher_way = footer_forth::where('status',1)->get();
        // view()->share('footer_forth_use_outher',$footer_forth_use_outher_way);

        // $footer_fifth_use_outher_way = footer_fifth::where('status',1)->get();
        // view()->share('footer_fifth_use_outher',$footer_fifth_use_outher_way);
    }
}
