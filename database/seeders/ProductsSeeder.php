<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_id' => 1,
                'product_title' => 'Dacia',
                'product_description' => 'Best state',
                'catagory_id' => 1,
                'brand_id' => 1,
                'image' => '1717871364.png',
                'vendor_name' => 'Vendor A',
                'price' => 266,
                'discounted_price' => 250,
                'product_capacity' => 5,
                'days' => 1,
                'product_lisence' => '12243',
                'product_gear' => 'Manual',
                'product_driver' => 'Without Driver',
                'created_at' => '2024-06-08 17:30:23',
                'updated_at' => '2024-06-08 17:30:23',
            ],
            [
                'product_id' => 2,
                'product_title' => 'Toyota Camry',
                'product_description' => 'Comfortable mid-size sedan',
                'catagory_id' => 1,
                'brand_id' => 1,
                'image' => 'camry.jpg',
                'vendor_name' => 'Vendor A',
                'price' => 500,
                'discounted_price' => 450,
                'product_capacity' => 5,
                'days' => 2,
                'product_lisence' => 'ABC123',
                'product_gear' => 'Automatic',
                'product_driver' => 'Without Driver',
                'created_at' => '2024-06-12 22:17:07',
                'updated_at' => '2024-06-12 22:17:07',
            ],
            [
                'product_id' => 3,
                'product_title' => 'Ford Explorer',
                'product_description' => 'Spacious SUV for all terrains',
                'catagory_id' => 2,
                'brand_id' => 2,
                'image' => 'explorer.jpg',
                'vendor_name' => 'Vendor A',
                'price' => 800,
                'discounted_price' => 750,
                'product_capacity' => 7,
                'days' => 4,
                'product_lisence' => 'DEF456',
                'product_gear' => 'Automatic',
                'product_driver' => 'Without Driver',
                'created_at' => '2024-06-12 22:17:07',
                'updated_at' => '2024-06-12 22:17:07',
            ],
            [
                'product_id' => 4,
                'product_title' => 'BMW X5',
                'product_description' => 'Luxury SUV with premium features',
                'catagory_id' => 2,
                'brand_id' => 3,
                'image' => 'x5.jpg',
                'vendor_name' => 'Vendor A',
                'price' => 1000,
                'discounted_price' => 950,
                'product_capacity' => 5,
                'days' => 2,
                'product_lisence' => 'GHI789',
                'product_gear' => 'Automatic',
                'product_driver' => 'Without Driver',
                'created_at' => '2024-06-12 22:17:07',
                'updated_at' => '2024-06-12 22:17:07',
            ],
            [
                'product_id' => 5,
                'product_title' => 'Honda Accord',
                'product_description' => 'Reliable and fuel-efficient sedan',
                'catagory_id' => 1,
                'brand_id' => 4,
                'image' => 'accord.jpg',
                'vendor_name' => 'Vendor A',
                'price' => 550,
                'discounted_price' => 500,
                'product_capacity' => 5,
                'days' => 3,
                'product_lisence' => 'JKL012',
                'product_gear' => 'Manual',
                'product_driver' => 'Without Driver',
                'created_at' => '2024-06-12 22:17:07',
                'updated_at' => '2024-06-12 22:17:07',
            ],
            [
                'product_id' => 6,
                'product_title' => 'Chevrolet Silverado',
                'product_description' => 'Heavy-duty truck for all needs',
                'catagory_id' => 3,
                'brand_id' => 5,
                'image' => 'silverado.jpg',
                'vendor_name' => 'Vendor A',
                'price' => 900,
                'discounted_price' => 850,
                'product_capacity' => 3,
                'days' => 7,
                'product_lisence' => 'MNO345',
                'product_gear' => 'Automatic',
                'product_driver' => 'Without Driver',
                'created_at' => '2024-06-12 22:17:07',
                'updated_at' => '2024-06-12 22:17:07',
            ],
            [
                'product_id' => 7,
                'product_title' => 'Audi A4',
                'product_description' => 'Compact executive car',
                'catagory_id' => 1,
                'brand_id' => 6,
                'image' => 'audi_a4.jpg',
                'vendor_name' => 'Vendor A',
                'price' => 700,
                'discounted_price' => 650,
                'product_capacity' => 5,
                'days' => 3,
                'product_lisence' => 'PQR678',
                'product_gear' => 'Automatic',
                'product_driver' => 'Without Driver',
                'created_at' => '2024-06-12 22:47:04',
                'updated_at' => '2024-06-12 22:47:04',
            ],
            [
                'product_id' => 8,
                'product_title' => 'Mercedes-Benz C-Class',
                'product_description' => 'Luxury sedan with advanced features',
                'catagory_id' => 1,
                'brand_id' => 7,
                'image' => 'c_class.jpg',
                'vendor_name' => 'Vendor A',
                'price' => 900,
                'discounted_price' => 850,
                'product_capacity' => 5,
                'days' => 4,
                'product_lisence' => 'STU901',
                'product_gear' => 'Automatic',
                'product_driver' => 'Without Driver',
                'created_at' => '2024-06-12 22:47:04',
                'updated_at' => '2024-06-12 22:47:04',
            ],
            [
                'product_id' => 9,
                'product_title' => 'Nissan Leaf',
                'product_description' => 'Eco-friendly electric vehicle',
                'catagory_id' => 4,
                'brand_id' => 8,
                'image' => 'leaf.jpg',
                'vendor_name' => 'Vendor A',
                'price' => 600,
                'discounted_price' => 550,
                'product_capacity' => 5,
                'days' => 3,
                'product_lisence' => 'VWX234',
                'product_gear' => 'Automatic',
                'product_driver' => 'Without Driver',
                'created_at' => '2024-06-12 22:47:04',
                'updated_at' => '2024-06-12 22:47:04',
            ],
            [
                'product_id' => 10,
                'product_title' => 'Volkswagen Golf',
                'product_description' => 'Versatile hatchback',
                'catagory_id' => 6,
                'brand_id' => 9,
                'image' => 'golf.jpg',
                'vendor_name' => 'Vendor A',
                'price' => 500,
                'discounted_price' => 450,
                'product_capacity' => 5,
                'days' => 3,
                'product_lisence' => 'YZA567',
                'product_gear' => 'Manual',
                'product_driver' => 'Without Driver',
                'created_at' => '2024-06-12 22:47:04',
                'updated_at' => '2024-06-12 22:47:04',
            ],
            [
                'product_id' => 11,
                'product_title' => 'Hyundai Ioniq',
                'product_description' => 'Efficient and affordable electric car',
                'catagory_id' => 4,
                'brand_id' => 10,
                'image' => 'ioniq.jpg',
                'vendor_name' => 'Vendor A',
                'price' => 650,
                'discounted_price' => 600,
                'product_capacity' => 5,
                'days' => 4,
                'product_lisence' => 'BCD890',
                'product_gear' => 'Automatic',
                'product_driver' => 'Without Driver',
                'created_at' => '2024-06-12 22:47:04',
                'updated_at' => '2024-06-12 22:47:04',
            ],
            [
                'product_id' => 12,
                'product_title' => 'BMW M3',
                'product_description' => 'High-performance sports car',
                'catagory_id' => 10,
                'brand_id' => 3,
                'image' => 'm3.jpg',
                'vendor_name' => 'Vendor A',
                'price' => 1200,
                'discounted_price' => 1150,
                'product_capacity' => 4,
                'days' => 3,
                'product_lisence' => 'EFG123',
                'product_gear' => 'Manual',
                'product_driver' => 'Without Driver',
                'created_at' => '2024-06-12 22:47:04',
                'updated_at' => '2024-06-12 22:47:04',
            ],
            [
                'product_id' => 13,
                'product_title' => 'Ford Mustang',
                'product_description' => 'Classic American muscle car',
                'catagory_id' => 10,
                'brand_id' => 2,
                'image' => 'mustang.jpg',
                'vendor_name' => 'Vendor A',
                'price' => 1100,
                'discounted_price' => 1050,
                'product_capacity' => 4,
                'days' => 3,
                'product_lisence' => 'HIJ456',
                'product_gear' => 'Manual',
                'product_driver' => 'Without Driver',
                'created_at' => '2024-06-12 22:47:04',
                'updated_at' => '2024-06-12 22:47:04',
            ],
            [
                'product_id' => 14,
                'product_title' => 'Toyota Sienna',
                'product_description' => 'Spacious and comfortable minivan',
                'catagory_id' => 7,
                'brand_id' => 1,
                'image' => 'sienna.jpg',
                'vendor_name' => 'Vendor A',
                'price' => 850,
                'discounted_price' => 800,
                'product_capacity' => 7,
                'days' => 5,
                'product_lisence' => 'KLM789',
                'product_gear' => 'Automatic',
                'product_driver' => 'Without Driver',
                'created_at' => '2024-06-12 22:47:04',
                'updated_at' => '2024-06-12 22:47:04',
            ],
            [
                'product_id' => 15,
                'product_title' => 'Chevrolet Bolt',
                'product_description' => 'Affordable electric car with great range',
                'catagory_id' => 4,
                'brand_id' => 5,
                'image' => 'bolt.jpg',
                'vendor_name' => 'Vendor A',
                'price' => 700,
                'discounted_price' => 650,
                'product_capacity' => 5,
                'days' => 4,
                'product_lisence' => 'NOP012',
                'product_gear' => 'Automatic',
                'product_driver' => 'Without Driver',
                'created_at' => '2024-06-12 22:47:04',
                'updated_at' => '2024-06-12 22:47:04',
            ],
            [
                'product_id' => 16,
                'product_title' => 'Honda CR-V',
                'product_description' => 'Compact SUV with plenty of space',
                'catagory_id' => 2,
                'brand_id' => 4,
                'image' => 'crv.jpg',
                'vendor_name' => 'Vendor A',
                'price' => 750,
                'discounted_price' => 700,
                'product_capacity' => 5,
                'days' => 4,
                'product_lisence' => 'QRS345',
                'product_gear' => 'Automatic',
                'product_driver' => 'Without Driver',
                'created_at' => '2024-06-12 22:47:04',
                'updated_at' => '2024-06-12 22:47:04',
            ],
        ]);
    }
}
