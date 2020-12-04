<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function users()
    {
       $users = DB::table('users')->get();
       return view('users',compact('users'));
    }

    public function product()
    {
        $products = DB::table('products')->get();
        return view('product',compact('products'));
    }


    public function users_product()
    {
        $user_product = DB::table('user_product')
            ->join('users','user_product.user_id',"=",'users.id')
            ->join('products','user_product.product_id',"=",'products.id')
            ->select('users.name as ad','products.name','products.price')
            ->get();
            return view('users_product',compact('user_product'));

    }

}
