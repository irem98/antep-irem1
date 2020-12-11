<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function banner()
    {
        $banners = DB::table('banners')->get();
        return view('product.banner',compact('banners'));
    }

    public function latest()
    {
        $latests = DB::table('latests')->get();
        return view('product.latest',compact('latests'));
    }

}
