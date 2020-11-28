<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hakkimda()
    {
        $name='İrem Sevda';
        $jobs='Bilgisayar Mühendisi';
        $city='Bingöl';
        return view('hakkimda',compact('name','jobs','city'));
    }
}
