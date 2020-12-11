<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = DB::table('blogs')->get();
        return view('product.blog',compact('blogs'));
    }
}
