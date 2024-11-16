<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\DB;

class OrderDetailTableSeeder extends Seeder
{
    public function run()
    {
        // Lấy tất cả các đơn hàng
        $orders = Order::all();

        // Kiểm tra xem có đơn hàng nào không
        if ($orders->isEmpty()) {
            echo "Không có đơn hàng nào để thêm chi tiết!";
            return; // Nếu không có đơn hàng, dừng Seeder
        }

        // Lấy tất cả các sản phẩm
        $products = Product::all();

        // Kiểm tra xem có sản phẩm nào không
        if ($products->isEmpty()) {
            echo "Không có sản phẩm nào để thêm vào chi tiết đơn hàng!";
            return; // Nếu không có sản phẩm, dừng Seeder
        }

        // Duyệt qua từng đơn hàng và tạo order details
        foreach ($orders as $order) {
            // Lấy một sản phẩm ngẫu nhiên từ bảng products
            $product = $products->random();

            // Tạo chi tiết đơn hàng cho mỗi đơn hàng
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'so_luong' => rand(1, 5),  // Số lượng ngẫu nhiên từ 1 đến 5
                'don_gia' => $product->price,
                'thanh_tien' => $product->price * rand(1, 5),
            ]);
        }

        echo "Seeder cho bảng order_details đã hoàn tất!";
    }
}
