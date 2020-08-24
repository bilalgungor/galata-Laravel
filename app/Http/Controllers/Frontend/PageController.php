<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Pages;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($slug)
    {
        $service=Pages::where('page_slug',$slug)->first();
        return view('frontend.service.index',compact('service'));
    }
}
