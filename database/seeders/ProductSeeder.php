<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('products')->insert([
            'name' => "Coca-Coca",
            'description' => "Coca-Cocla sin azucar",
            'amount' => 1500
        ]);
        DB::table('products')->insert([
            'name' => "Sprite",
            'description' => "Bebida gaseosa Sprite",
            'amount' => 3000
        ]);
        DB::table('products')->insert([
            'name' => "Del Valle",
            'description' => "Bebidas Del Valle",
            'amount' => 1000
        ]);
    }
}
