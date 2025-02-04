<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedido;
use App\Models\Users;
use App\Models\Products;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Pedido::create([
            "name" => "Breiner"
        ]);

        $users = Users::all();
        $products = Products::all();
    }
}
