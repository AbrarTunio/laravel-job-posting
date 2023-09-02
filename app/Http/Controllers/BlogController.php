<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showOne(Blog $blog) {
        return view( '/blogs' , [ 'blog' => $blog ] ) ;
    }

}
