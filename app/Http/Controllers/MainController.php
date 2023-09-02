<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function showAll( Blog $blog ) {
        $jobs = $blog->all();
        return view('home' , [ 'blog_heading' =>  'Job Listing', 'blogs' => $jobs ] );
    }

}
