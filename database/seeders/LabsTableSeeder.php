<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LabsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Lab::insert([
        ['name' => 'Lab A', 'location' => 'City Center', 'contact' => '1234567890'],
        ['name' => 'Lab B', 'location' => 'Downtown', 'contact' => '0987654321'],
    ]);
}

}
