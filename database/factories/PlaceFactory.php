<?php

namespace Database\Factories;

use App\Models\Place;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

                'name' => fake()->address(),
                'lat' => fake()->latitude(),
                'lon' => fake()->longitude(),
                'address1' => fake()->streetAddress(),
                'city' => fake()->city(),
                'state' => fake()->country(),
                'zip' => rand(1000, 3000),
                'website' => fake()->url(),
                'phone' => fake()->phoneNumber(),

        ];

////            $place = Place::create([ ]);
//        foreach (User::all() as $user) {
//            if (rand(0, 2) == 1) {
//                $place->checkins()->create(['user_id' => $user->id]);
//            }
//        }

    }
}
