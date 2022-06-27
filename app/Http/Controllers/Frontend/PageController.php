<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Post;
use App\Models\Ad;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //Home Page
    public function home()
    {
        //Company
        $company=Company::first();
        //Menus List
        $menus = Category::where('status',true)->get();

        //Latest Top 3 Post
        $latest = Post::orderBy('id','desc')->limit(4)->get();
        //Latest Top 3 Post
        $posts = Post::orderBy('id','desc')->limit(3)->get();

        // Policits
        $category = Category::where('slug','politics')->first();
        $politics = $category->posts;

        // Ads
        $top_ads = Ad::where('ads_category','top_ads')->first();

        $header_ads = Ad::where('ads_category','header_ads')->first();
        return view('frontend.pages.home',compact('menus','posts','company','politics','latest','top_ads','header_ads'));
    }

    //Category Page
    public function category($slug)
    {
         //Company
         $company=Company::first();
         //Menus List
         $menus = Category::where('status',true)->get();

         //Category
         $category = Category::where('slug',$slug)->first();
         $posts = $category->posts;
          // Ads
        $top_ads = Ad::where('ads_category','top_ads')->first();

        $header_ads = Ad::where('ads_category','header_ads')->first();
         return view('frontend.pages.category',compact('menus','company','posts', 'top_ads','header_ads'));
    }

    //Single Page
    public function single($id)
    {

        //Company
        $company=Company::first();
        //Menus List
        $menus = Category::where('status',true)->get();

        $post=Post::find($id);
         // Ads
         $top_ads = Ad::where('ads_category','top_ads')->first();

         $header_ads = Ad::where('ads_category','header_ads')->first();
        return view('frontend.pages.single',compact('post','company','menus','top_ads','header_ads'));
    }
}
