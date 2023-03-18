<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanBlog extends Controller
{
    public function index()
    {
        return view("blog.index");
    }

    public function artikel1()
    {
        return view("blog.algoritma-fyp-tiktok");
    }
}
