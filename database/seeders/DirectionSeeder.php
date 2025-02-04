<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Direction;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = Users::first();

        Direction::create([
            "user_id" => $user->id,
            "street" => "Breiner"
        ]);
    }
}
