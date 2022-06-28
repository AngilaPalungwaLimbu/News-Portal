<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Category;
use App\Models\Company;
use View;

class BaseController extends Controller
{
    public function __construct()
    {
        //Company
        $company = Company::first();
        //Menus List
        $menus = Category::where('status', true)->get();
         // Ads
         $top_ads = Ad::where('ads_category', 'topbar_ads')->first();

        $header_ads = Ad::where('ads_category', 'header_ads')->first();

        $sidebar_ads = Ad::where('ads_category', 'sidebar_ads')->first();

        View::share('company',$company);
        View::share('menus',$menus);
        View::share('top_ads',$top_ads);
        View::share('header_ads',$header_ads);
        View::share('sidebar_ads',$sidebar_ads);

    }
}
