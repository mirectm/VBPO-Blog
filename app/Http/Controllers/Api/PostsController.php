<?php

namespace App\Http\Controllers\Api;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Http\Resources\PostResource;

class PostsController extends Controller
{
    public function index()
    {
        //return PostResource::collection(Post::paginate(10));
        return Post::latest('id')->get();
    }
    public function show($slug)
    {
        //return Post::find($slug);
        return Post::where('slug', $slug)->firstOrFail();
    }
}
