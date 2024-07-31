<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RequestStylist;
use App\Models\User;
use Faker\Factory as Faker;

class RequestStylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $users = User::pluck('id')->toArray();

        foreach (range(1, 105) as $index) {
            RequestStylist::create([
                'user_id' => $faker->randomElement($users),
                'saloon_name' => $faker->company,
                'saloon_city' => $faker->city,
                'saloon_address' => $faker->address,
                'saloon_phone' => $faker->phoneNumber,
                'message' => $faker->paragraph,
            ]);
        }
    }
}
