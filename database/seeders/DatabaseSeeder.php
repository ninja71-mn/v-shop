<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'phone' => '1234567890',
            'email' => 'admin@admin.com',
            'national_id' => '1234567891',
            'password' => Hash::make('12345678') ,
            'is_admin' => '1',

        ]);

        DB::table('brands')->insert([
            [
                'name'=>'Dell',
                'slug'=>'dell',
            ],
            [
                'name'=>'Samsung',
                'slug'=>'samsung',
            ],
            [
                'name'=>'Apple',
                'slug'=>'apple',
            ],
            [
                'name'=>'Huawei',
                'slug'=>'huawei',
            ]
        ]);

        DB::table('categories')->insert([
            [
                'name'=>'Computer',
                'slug'=>'computer',
            ],
            [
                'name'=>'Laptop',
                'slug'=>'laptop',
            ],
            [
                'name'=>'Phone',
                'slug'=>'phone',
            ],
            [
                'name'=>'Tablet',
                'slug'=>'tablet',
            ]
        ]);

        Product::create([

                'title'=>'lorem ipsum',
                'price'=>100,
                'quantity'=>3,
                'category_id'=>1,
                'brand_id'=>1,
                'description'=>'lorem ipsum description',

        ]);
    }
}
