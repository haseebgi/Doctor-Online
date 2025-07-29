<?php

namespace Database\Seeders;
use App\Models\BodyTest;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BodyTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
{
    BodyTest::create([
        'name' => 'CBC',
        'original_price' => 1000,
       
    ]);

    BodyTest::create([
        'name' => 'Liver Function Test',
        'original_price' => 2000,
       
    ]);
}
}