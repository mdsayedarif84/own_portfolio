<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.body');
    }
    public function about()
    {
        return view('admin.pages.about');
    }
    public function portfolio()
    {
        return view('admin.pages.portfolio');
    }
    public function contact()
    {
        return view('admin.pages.contact');
    }

    public function blog()
    {
        return view('admin.pages.blog');
    }
}
