<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 日本語のデータ
        $faker = \Faker\Factory::create('ja_JP'); 

        for ($i = 0; $i < 5000; $i++) {
            Item::create([
                'name' => $faker->name,
                'description' => $faker->realText(30)
            ]);
        }
    }
}