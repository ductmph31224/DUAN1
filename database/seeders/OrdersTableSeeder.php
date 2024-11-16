<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Lấy danh sách tất cả các user_id từ bảng users
        $existingUserIds = DB::table('users')->pluck('id'); // Lấy tất cả id người dùng

        // Thêm dữ liệu giả vào bảng orders
        for ($i = 0; $i < 10; $i++) {
            // Chọn ngẫu nhiên một user_id từ danh sách đã lấy
            $userId = $existingUserIds->random();

            DB::table('orders')->insert([
                'ma_don_hang' => $faker->unique()->numerify('DH-#####'),
                'user_id' => $userId,  // Sử dụng user_id hợp lệ từ bảng users
                'ten_nguoi_nhan' => $faker->name,
                'phone_nguoi_nhan' => $faker->phoneNumber,
                'email_nguoi_nhan' => $faker->email,
                'address_nguoi_nhan' => $faker->address,
                'tien_hang' => $faker->randomFloat(2, 50, 500),
                'tien_ship' => $faker->randomFloat(2, 5, 50),
                'tong_tien' => $faker->randomFloat(2, 100, 600),
                'ghi_chu' => $faker->text(100),
                'trang_thai_don_hang' => $faker->randomElement(['pending', 'completed', 'cancelled']),
                'trang_thai_thanh_toan' => $faker->randomElement(['paid', 'unpaid']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
