<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *   $this-> call([ProductSeeder::class,]);
     */
    public function run(): void
    {
        $this->call(ProductsTableSeeder::class);
    }
}

