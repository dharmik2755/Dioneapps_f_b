<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\login;
use Illuminate\Support\Facades\Hash;

// use Faker\Factory as Faker;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // simple add one data in data base 
        // use php artisan db:seed
        // $login = new login;
        // $login->admin = "dioneapps";
        // $login->password = Hash::make('2755');
        // $login->save();

        // one time fake data insert in data base
        // $faker = Faker::create();
        // $login = new login;
        // $login->admin = $faker->admin;
        // $login->password = $faker->password;
        // $login->save();

    }
}
