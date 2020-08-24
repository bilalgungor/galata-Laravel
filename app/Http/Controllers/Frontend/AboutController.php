<?php

namespace App\Http\Controllers\Frontend;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about=About::where('id',1)->first();
        return view('frontend.about.index')->with('about',$about);
    }
}
