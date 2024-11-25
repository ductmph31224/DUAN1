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


        // Cập nhật số lượng cho từng sản phẩm
        foreach ($request->quantity as $key => $quantity) {
            if (isset($cart[$key])) {
                $cart[$key]['quantity'] = $quantity;
            }
        }


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
        // Lấy giỏ hàng từ session (hoặc trả về mảng rỗng nếu không có giỏ hàng)
    $cart = session()->get('cart', []);

    // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
    if (isset($cart[$id])) {
        unset($cart[$id]); // Xóa sản phẩm khỏi giỏ hàng
        session()->put('cart', $cart); // Lưu lại giỏ hàng vào session

        return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng!');
    }

    // Nếu sản phẩm không tồn tại trong giỏ hàng
    return redirect()->back()->with('error', 'Sản phẩm không tồn tại trong giỏ hàng!');
    }
    public function formShowdondathang(){
        return view('client.layouts.partials.mua');
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

