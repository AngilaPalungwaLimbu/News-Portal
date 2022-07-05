<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class PostApiController extends Controller
{
   public function query(Request $request){

        $categories=Category::query();
        if($request->get('slug')){
            $category=$categories->where('slug',$request->slug)->first();
            return PostResource::collection($category->posts);
        }
   }
   public function search(Request $request){

    $posts=Post::query();
    if($request->get('title')){
        $posts->where('title','like','%'.$request->title.'%');
        return PostResource::collection($posts->get());
    }
}
}
