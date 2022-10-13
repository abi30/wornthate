<?php

namespace Database\Seeders;


use App\Models\Place;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $place = Place::create([
                'name'       => fake()->address(),
                'lat'        => fake()->latitude(),
                'lon'        => fake()->longitude(),
                'address1'   => fake()->streetAddress(),
                'city'       => fake()->city(),
                'state'      => fake()->country(),
                'zip'        => rand(1000, 3000),
                'website'    => fake()->url(),
                'phone'      => fake()->phoneNumber(),
            ]);

            foreach (User::all() as $user) {
                if (rand(0, 2) == 1) {
                    $place->checkins()->create(['user_id' => $user->id]);
                }
            }
        }
    }
}
