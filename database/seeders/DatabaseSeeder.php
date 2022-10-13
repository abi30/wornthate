<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Concerns\GuardsAttributes;
use Illuminate\Database\Eloquent\Model as el;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


//         \App\Models\User::factory(10)->create();
//         \App\Models\Place::factory(20)->create();
//         \App\Models\Checkin::factory(10)->create();

//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);

//        el::unguard();
//        $truncate = [
//            'checkins',
//            'places',
//            'users',
//        ];
//
//        foreach ($truncate as $table) {
//            DB::table($table)->truncate();
//        }
//
        $this->call(UserTableSeeder::class);
//        $this->call(PlaceTableSeeder::class);
    }
}
