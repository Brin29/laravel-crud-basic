<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            "name" => "Camiseta ortiva",
            "description" => "Camiseta cómoda para deportes",
            "category" => "Ropa deportiva",
            "image" => "https://example.com/imagen.jpg",
            "price" => 20000,
            "is_active" => true,
            "discount" => 10,
            "colors" => ["Rojo", "Azul", "Negro"],
            "sizes" => ["S", "M", "L"]
        ]);
    }
}
