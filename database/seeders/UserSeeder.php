<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => env('APP_NAME'),
            'firstname' => "Stage",
            'lastname' => "Review.nl",
            'email' => env('APP_MAIL'),
            'password' => Hash::make(env('APP_PASSWORD'))
        ]);
    }
}
