<?php

namespace App\Http\Controllers\Front\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('front.page.home');
    }
    public function about()
    {
        return view('front.page.about');
    }
    public function portfolio()
    {
        return view('front.page.portfolio');
    }
    public function contact()
    {
        return view('front.page.contact');
    }
    public function blog()
    {
        return view('front.page.blog');
    }
    public function blogPost()
    {
        return view('front.page.blog-post');
    }
}
