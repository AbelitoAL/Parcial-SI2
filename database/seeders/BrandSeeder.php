<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create(['nombre' => 'Adidas']);
        Brand::create(['nombre' => 'Nike']);
        Brand::create(['nombre' => 'Fila']);
        Brand::create(['nombre' => 'Puma']);
        Brand::create(['nombre' => 'Gucci']);
        Brand::create(['nombre' => 'Shein']);
        Brand::create(['nombre' => 'Zara']);
        Brand::create(['nombre' => 'Calvin Klein']);
        Brand::create(['nombre' => 'Levis']);
        Brand::create(['nombre' => 'Forever 21']);
        Brand::create(['nombre' => 'Under']);
        Brand::create(['nombre' => 'Prada']);
        Brand::create(['nombre' => 'Nacional']);
        Brand::create(['nombre' => 'Brasilera']);
    }
}
