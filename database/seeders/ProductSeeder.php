<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Apple MacBook Air',
                "price"=>"99000",
                "description"=>"Apple MacBook Air 13.3-Inch Retina Display 8-core Apple M1 chip with 8GB RAM, 256GB SSD (MGN63) Space Gray",
                "category"=>"Laptop",
                "gallery"=>"https://www.startech.com.bd/image/cache/catalog/laptop/apple/macbook-air/MGN73/macbook-mgn73Zp-a-500x500.jpg",
            ],
            [
                'name'=>'Apple MacBook Air',
                "price"=>"122000",
                "description"=>"Apple MacBook Air 13.3-Inch Retina Display 8-core Apple M1 chip with 8GB RAM, 512GB SSD (MGNA3) Silver",
                "category"=>"Laptop",
                "gallery"=>"https://www.startech.com.bd/image/cache/catalog/laptop/apple/macbook-air/macbook-air-silver/macbook-air-silver-010-500x500.jpg",
            ],
            [
                'name'=>'Apple MacBook Pro',
                "price"=>"126500",
                "description"=>"Apple MacBook Pro 13.3-Inch Retina Display 8-core Apple M1 chip with 8GB RAM, 256GB SSD (MYDA2) Silver",
                "category"=>"Laptop",
                "gallery"=>"https://www.startech.com.bd/image/cache/catalog/laptop/apple/myda2/myda2-500x500.jpg",
            ],
            [
                'name'=>'Apple MacBook Pro',
                "price"=>"305000",
                "description"=>"Apple MacBook Pro 13-Inch 10th Gen Core i7-2.3GHz, 32GB RAM, 2TB SSD, Touch Bar, Space Gray 2020 (MWP62LL/A)",
                "category"=>"Laptop",
                "gallery"=>"https://www.startech.com.bd/image/cache/catalog/laptop/apple/macbook-pro/space-gray/macbook-pro-01-500x500.jpg",
            ]
        ]);
    }
}
