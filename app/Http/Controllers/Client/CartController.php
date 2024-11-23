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
        return view('client.layouts.partials.cart', compact('cart'));
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
        
    $key = $request->input('key');
    $quantity = $request->input('quantity');
        if ($quantity < 1) {
        return response()->json(['error' => 'Số lượng không hợp lệ'], 400);
    }
    if (isset($cart[$key])) {
        $cart[$key]['quantity'] = $quantity;
        $cart[$key]['subtotal'] = $cart[$key]['price'] * $quantity;
    }

    session()->put('cart', $cart);

    return response()->json(['success' => true]);
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
    public function checkout(){
        $cart = session()->get('cart', []);
        $subtotal = 0;
        $total= 0;
        foreach($cart as $item ){
            $subtotal += $item['price'] * $item['quantity'];
        }
        $shipping = 30000;
        $total = $subtotal + $shipping;
        return view('client.layouts.partials.checkout',compact('cart','total','subtotal','shipping'));
    }
}
    
