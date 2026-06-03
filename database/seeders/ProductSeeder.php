<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'img' => 'images/products/wireless-headphones.jpg',
                'brand' => 'Sony',
                'title' => 'Sony WH-1000XM4 Wireless Noise-Canceling Headphones',
                'rating' => 4.8,
                'reviews' => 1240,
                'sellPrice' => 248.00,
                'orders' => '450',
                'mrp' => '349.99',
                'discount' => 29,
                'category' => 'Electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'images/products/mechanical-keyboard.jpg',
                'brand' => 'Logitech',
                'title' => 'Logitech G PRO X Mechanical Gaming Keyboard',
                'rating' => 4.5,
                'reviews' => 580,
                'sellPrice' => 129.99,
                'orders' => '180',
                'mrp' => '149.99',
                'discount' => 13,
                'category' => 'Computer Accessories',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}