<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => 1,
            'name' => 'Administrator'
        ]);
        Role::create([
            'id' => 2,
            'name' => 'Anonymous'
        ]);
        Role::create([
            'id' => 3,
            'name' => 'Student'
        ]);
        Role::create([
            'id' => 4,
            'name' => 'Teacher'
        ]);
    }
}
