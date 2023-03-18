<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
    public function index()
    {
        return view("sitemap.index");
    }
}
