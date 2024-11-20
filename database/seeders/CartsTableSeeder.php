<?php
// database/seeders/CartsTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Faker\Factory as Faker;

class CartsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Lấy tất cả người dùng và sản phẩm từ cơ sở dữ liệu
        $users = User::all();
        $products = Product::all();

        // Kiểm tra nếu có ít nhất 1 user và 1 sản phẩm
        if ($users->count() > 0 && $products->count() > 0) {
            foreach ($users as $user) {
                // Lấy ngẫu nhiên 5 sản phẩm cho mỗi người dùng
                $randomProducts = $products->random(5);

                foreach ($randomProducts as $product) {
                    // Tạo cart cho người dùng và sản phẩm với số lượng ngẫu nhiên
                    Cart::create([
                        'user_id' => $user->id,
                        'product_id' => $product->id,
                        'quantity' => $faker->numberBetween(1, 5), // Số lượng sản phẩm trong giỏ hàng (1 đến 5)
                    ]);
                }
            }
        }
    }
}
