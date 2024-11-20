<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Tạo 10 người dùng admin
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'address' => $faker->address,
                'password' => bcrypt('password'),  // Mật khẩu mặc định
                'role' => 'admin',  // Đặt role là admin
            ]);
        }

        // Tạo 40 người dùng user
        for ($i = 0; $i < 40; $i++) {
            User::create([
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'address' => $faker->address,
                'password' => bcrypt('password'),  // Mật khẩu mặc định
                'role' => 'user',  // Đặt role là user
            ]);
        }
    }
}
