<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    //
    public function listCart(){
        $cart = session()->get('cart', []);
       
        $subtotal = 0;
        $total= 0;
        foreach($cart as $item ){
            $subtotal += $item['price'] * $item['quantity'];
        }
        $shipping = 30000;
        $total = $subtotal + $shipping;
      
        return view('client.layouts.partials.cart', compact('cart','total','subtotal','shipping'));
    }
    public function addCart(Request $request){
        $request->validate([
        'quantity' => 'required|integer|min:1', // Số lượng phải là số nguyên >= 1
        ]);

    $product = [
        'id' => $request->id,
        'ten_san_pham' => $request->ten_san_pham,
        'price' => $request->price,
        'quantity' => $request->quantity,
        'image' => $request->image,
    ];
    
    // Lấy giỏ hàng hiện tại từ session
    $cart = session()->get('cart', []);
    // Kiểm tra sản phẩm đã tồn tại trong giỏ chưa
    if (isset($cart[$product['id']])) {
        $cart[$product['id']]['quantity'] += $product['quantity'];
    } else {
        $cart[$product['id']] = $product;
    }
    // Cập nhật giỏ hàng vào session
    session()->put('cart', $cart);
    
    return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }
   
    public function updateCart(Request $request){
        
     $cart = session()->get('cart', []);
     
        
        // Cập nhật số lượng cho từng sản phẩm
        foreach ($request->quantity as $key => $quantity) {
            if (isset($cart[$key])) {
                $cart[$key]['quantity'] = $quantity;
            }
        }

        // Lưu lại giỏ hàng đã cập nhật vào session
        session()->put('cart', $cart);

        // Redirect lại giỏ hàng
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }
     public function remove(String $id)
    {
        $cart = session()->get('cart', []);

        // Xóa sản phẩm khỏi giỏ hàng
        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        // Lưu lại giỏ hàng đã cập nhật vào session
         session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }
}
