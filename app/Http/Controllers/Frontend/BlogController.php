<?php

namespace App\Http\Controllers\frontend;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data['blog'] = Blog::all();
        return view('frontend.blog.index',compact('data'));
    }

    public function detail($slug)
    {
        $data['blog'] = Blog::all();
        $blog = Blog::where('blog_slug',$slug)->first();
        return view('frontend.blog.detail',compact('blog','data'));
    }
}
