<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Post;
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
        $posts = Post::orderBy('id','desc')->limit(3)->get();

        // Policits
        $category = Category::where('slug','politics')->first();
        $politics = $category->posts;
        return view('frontend.pages.home',compact('menus','posts','company','politics'));
    }

    //Category Page
    public function category()
    {
        # code...
    }

    //Single Page
    public function single($slug)
    {

        //Company
        $company=Company::first();
        //Menus List
        $menus = Category::where('status',true)->get();

        $post=Post::where('slug',$slug)->first();
        return view('frontend.pages.single',compact('post','company','menus'));
    }
}
