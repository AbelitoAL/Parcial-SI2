<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'nombre' => 'Poleras',
        ]);

        Category::create([
            'nombre' => 'Pantalones',
        ]);

        Category::create([
            'nombre' => 'Camisas',
        ]);

        Category::create([
            'nombre' => 'Short',
        ]);

        Category::create([
            'nombre' => 'Camisetas',
        ]);

        Category::create([
            'nombre' => 'Canguros',
        ]);

        Category::create([
            'nombre' => 'Zapatos',
        ]);

        Category::create([
            'nombre' => 'Chamarras',
        ]);
    }
}
