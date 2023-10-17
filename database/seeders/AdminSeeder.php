<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dario = User::create([
            'name' => 'Abel',
            'email' => 'abel@correo.com',
            'password' => bcrypt('12345678'),
            'role' => 0,
        ]);
        Storage::deleteDirectory('products');
        Storage::makeDirectory("public/products");

    }
}
