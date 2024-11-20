<?php
// database/seeders/CartItemsTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;
use App\Models\Product;
use Faker\Factory as Faker;
use App\Models\CartItem;

class CartItemsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Lấy tất cả các giỏ hàng và sản phẩm từ cơ sở dữ liệu
        $carts = Cart::all();
        $products = Product::all();

        // Kiểm tra nếu có ít nhất 1 giỏ hàng và 1 sản phẩm
        if ($carts->count() > 0 && $products->count() > 0) {
            // Lặp qua tất cả giỏ hàng
            foreach ($carts as $cart) {
                // Lấy ngẫu nhiên từ 1 đến 5 sản phẩm cho mỗi giỏ hàng
                $randomProducts = $products->random(rand(1, 5));

                // Tạo cart_items cho giỏ hàng với các sản phẩm đã chọn
                foreach ($randomProducts as $product) {
                    CartItem::create([
                        'cart_id' => $cart->id,
                        'product_id' => $product->id,
                        'quantity' => $faker->numberBetween(1, 5), // Số lượng sản phẩm ngẫu nhiên trong giỏ hàng
                    ]);
                }
            }
        } else {
            // Nếu không có giỏ hàng hoặc sản phẩm, in thông báo
            echo "Không có giỏ hàng hoặc sản phẩm trong cơ sở dữ liệu.\n";
        }
    }
}
