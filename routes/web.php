<?php

use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\SitemapXmlController;
use App\Http\Controllers\HalamanBlog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [LandingpageController::class, 'index']);

Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);

Route::get('/blog', [HalamanBlog::class, 'index']);

Route::get('/blog/algoritma-fyp-tiktok', [HalamanBlog::class, 'artikel1']);
