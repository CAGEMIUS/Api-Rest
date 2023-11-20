<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Coca-Cola Original',
            'slug' => 'coca-cola origina',
            'details' => '100 ml',
            'price' => 299.99,
            'shipping_cost' => 29.99,
            'description' => 'Bebida gaseosa',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'macbook-pro.png'
        ]);

        Product::create([
            'name' => 'Del Valle',
            'slug' => 'del valle',
            'details' => '100 ml',
            'price' => 149.99,
            'shipping_cost' => 19.99,
            'description' => 'Jugo natural',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'dell-v3557.png'
        ]);

        Product::create([
            'name' => 'Fanta',
            'slug' => 'fanta',
            'details' => '200 ml',
            'price' => 49.99,
            'shipping_cost' => 14.99,
            'description' => 'Bebida gaseosa',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'iphone-11-pro.png'
        ]);

        Product::create([
            'name' => 'Coca-Cola Sin Azucar',
            'slug' => 'coca-cola sin azucar',
            'details' => '100 ml',
            'price' => 8.99,
            'shipping_cost' => 1.89,
            'description' => 'Bebida gaseosa',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'remax-610d.jpg'
        ]);

        Product::create([
            'name' => 'Fuzetea',
            'slug' => 'fuzetea',
            'details' => '150 ml',
            'price' => 11.99,
            'shipping_cost' => 12.59,
            'description' => 'Bebida de tea',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'samsung-led-24.png'
        ]);

        Product::create([
            'name' => 'Bsisa Agua Pura',
            'slug' => 'brisa agua pura',
            'details' => '200 ml',
            'price' => 14.99,
            'shipping_cost' => 13.39,
            'description' => 'Agua natural',
            'category_id' => 5,
            'brand_id' => 4,
            'image_path' => 'samsung-mv800.jpg'
        ]);

        Product::create([
            'name' => 'Sprite',
            'slug' => 'sprite',
            'details' => '100 ml',
            'price' => 18.99,
            'shipping_cost' => 6.79,
            'description' => 'Bebida gaseosa',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'gr5-2017.jpg'
        ]);
    }
}
