<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontEnd\BaseController;
use App\Models\Category;
use App\Models\Company;
use App\Models\Post;
use App\Models\Ad;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    //Home Page
    public function home()
    {


        //Latest Top 3 Post
        $latest = Post::orderBy('id', 'desc')->limit(4)->get();
        //Latest Top 3 Post
        $posts = Post::orderBy('id', 'desc')->limit(3)->get();

        // Policits
        $category = Category::where('slug', 'politics')->first();
        $politics = $category->posts;

        // Policits
        $category = Category::where('slug', 'sports')->first();
        $sports = $category->posts;

        return view('frontend.pages.home', compact( 'posts', 'politics', 'latest','sports'));
    }

    //Category Page
    public function category($slug)
    {
        //Category
        $category = Category::where('slug', $slug)->first();
        $posts = $category->posts;
        return view('frontend.pages.category', compact( 'posts'));
    }

    //Single Page
    public function single($id)
    {
        $post = Post::find($id);
        $post->increment('views');
        //Latest Top 3 Post
        $latest = Post::orderBy('id', 'desc')->limit(4)->get();
        return view('frontend.pages.single', compact('post', 'latest'));
    }
    public function subscribe(Request $request){
        $subscribe=new Subscribe();
        $subscribe->email=$request->email;
        $subscribe->save();
        return redirect()->back();
    }

}
