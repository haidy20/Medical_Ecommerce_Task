<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminUserSeeder::class);

        // ننشئ 10 تصنيفات (Categories)
        \App\Models\Category::factory(10)->create();

        // ننشئ 50 منتج مرتبط بتصنيفات موجودة
        \App\Models\Product::factory(10)->create();
        // هنا ممكن تضيفي سييدرز أخرى مثل ProductSeeder، CategorySeeder ...
        // \App\Models\User::factory(10)->create();
    }
}
