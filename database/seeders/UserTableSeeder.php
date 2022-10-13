<?php

namespace Database\Seeders;

use App\Models\Place;
use App\Models\User;
use App\Models\Checkin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        User::factory()->times(10)->create();

        for ($i = 1; $i < 20; $i++) {
            User::create([
                'name'               => fake()->name(),
                'email'              => fake()->safeEmail(),
//                'active'             => $i === 0 ? true : rand(0, 1),
                'active'             =>  rand(0, 1),
//                'gender'             => rand(0, 1) ? 'male' : 'female',
                'gender'             => fake()->randomElement(['male', 'female']),
                'birthday'           => fake()->dateTimeBetween('-40 years', '-18 years'),
                'location'           => fake()->city().",".fake()->country(),
                'bio'                => fake()->sentence(100),
            ]);

        Place::create([
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


            Checkin::create([
//                'user_id' => 1 rand(1, 19),
//                'place_id' => 1 rand(1, 19),
                'user_id' => $i,
                'place_id' => $i,
            ]);
        }
    }
}
