<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'id' => 1,
            'name' => 'Idea-X',
            'slogan' => 'Alles is mogelijk, als je maar begint',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore',
            'city' => 'Almkerk',
            'street_name' => 'Laagt',
            'house_number' => 16,
            'zip_code' => '4286 LV',
        ]);
    }
}
