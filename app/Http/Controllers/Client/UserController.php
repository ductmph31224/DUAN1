<?php

namespace App\Http\Controllers\Client;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;

class UserController extends Controller
{
    public function indexUser(){
        $products = Product::orderBy('so_luong', 'desc')->take(10)->get();
        $allProducts = Product::all();
        $product_2 = Product::take(2)->get()->first();
        $product_1 = Product::orderBy('created_at', 'desc')->skip(1)->take(1)->first();
        $product_3 = Product::orderBy('created_at', 'desc')->skip(2)->take(1)->first();
        $product_4 = Product::orderBy('created_at', 'desc')->skip(3)->take(1)->first();
        $banner = Banner::get();
        return view('client.index', compact('products','allProducts','product_2','product_1','product_3','product_4','banner') );
    }
    public function detailProduct(String $id){
        $product = Product::find($id);
        $id_category = $product->category_id;
        $products11 = Product::where('category_id', $id_category)
        ->orderBy('created_at', 'desc')
        ->take(3)->get();
        $productSoLuong = Product::orderBy('so_luong', 'desc')->take(3)->get();  
        return view('client.layouts.partials.product-detail',compact('product','products11','productSoLuong')  );
    }
    public function loginUser(Request $request)
{

    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ], [
        'email.required' => 'Vui lòng nhập email.',
        'email.email' => 'Email không đúng định dạng.',
        'password.required' => 'Vui lòng nhập mật khẩu.',
    ]);
}
}
