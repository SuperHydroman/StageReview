<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'role_id' => 1,
            'name' => env('APP_NAME'),
            'firstname' => "Stage",
            'lastname' => "Review.nl",
            'email' => env('APP_MAIL'),
            'password' => Hash::make(env('APP_PASSWORD'))
        ]);
        User::create([
            'id' => 2,
            'role_id' => 2,
            'name' => "johndenver",
            'firstname' => "John",
            'lastname' => "Denver",
            'email' => 'johndenver@no-reply.nl',
            'password' => Hash::make(env('APP_PASSWORD'))
        ]);
    }
}
