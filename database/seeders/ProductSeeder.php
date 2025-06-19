<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Camiseta Estampada',
            'slug' => 'camiseta-estampada',
            'description' => 'Camiseta 100% algodão com estampa exclusiva.',
            'price' => 59.90,
            'image' => 'https://via.placeholder.com/300x300?text=Camiseta+1',
        ]);

        Product::create([
            'name' => 'Camiseta Básica',
            'slug' => 'camiseta-basica',
            'description' => 'Camiseta básica confortável para o dia a dia.',
            'price' => 39.90,
            'image' => 'https://via.placeholder.com/300x300?text=Camiseta+2',
        ]);
    }
}
