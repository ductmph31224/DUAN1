<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Author;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Giả sử bạn đã có dữ liệu trong bảng categories, publishers, authors
        $categories = Category::all();
        $publishers = Publisher::all();
        $authors = Author::all();

        // Tạo 50 sản phẩm
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'ma_san_pham' => $faker->unique()->numberBetween(1000, 9999),
                'ten_san_pham' => $faker->word,
                'image' => $faker->imageUrl(640, 480, 'technics', true),  // Tạo ảnh giả
                'so_luong' => $faker->numberBetween(1, 100),
                'category_id' => $categories->random()->id, // Lấy ngẫu nhiên một category
                'publisher_id' => $publishers->random()->id, // Lấy ngẫu nhiên một publisher
                'author_id' => $authors->random()->id, // Lấy ngẫu nhiên một author
                'gia_san_pham' => $faker->randomFloat(2, 10, 500), // Giá sản phẩm ngẫu nhiên
                'gia_khuyen_mai' => $faker->randomFloat(2, 5, 200), // Giá khuyến mãi ngẫu nhiên (nếu có)
                'mo_ta' => $faker->paragraph, // Mô tả sản phẩm
                'ngay_nhap' => $faker->date, // Ngày nhập hàng
            ]);
        }
    }
}
