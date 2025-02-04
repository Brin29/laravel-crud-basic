<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Direction;
use App\Models\Users;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = Users::all();

        $users->each(function ($user) {
            Direction::create([
                "street" => "Breiner",
                "user_id" => $user->id,
            ]);
        });
    }
}
