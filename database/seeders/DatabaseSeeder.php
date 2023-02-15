<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


// 
use Faker\Factory as Faker;

use Database\Factories\UserFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        \App\Models\User::factory(10)->create();

        // User::create([
        //     'name'     => 'user1',
        //     'email'    => 'user1@gmail.com',
        //     'password' => Hash::make('123456')
        // ]);


        // $faker = Faker::create();
        // User::create([
        //     'name' => $faker->name,
        //     'email' => $faker->unique()->safeEmail,
        //     'password' => Hash::make('123456')
        // ]);
    }
}