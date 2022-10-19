<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Karoseri;

class KaroseriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Karoseri::create([
            'name' => 'Flat Deck',
            'slug' => 'flat-deck',
        ]);
        Karoseri::create([
            'name' => 'Box',
            'slug' => 'box',
        ]);
        Karoseri::create([
            'name' => 'Wing Box',
            'slug' => 'wing-box',
        ]);
        Karoseri::create([
            'name' => 'Dump Truck',
            'slug' => 'dump-truck',
        ]);
        Karoseri::create([
            'name' => 'Bus',
            'slug' => 'bus',
        ]);
        Karoseri::create([
            'name' => 'Three Way',
            'slug' => 'three-way',
        ]);
        Karoseri::create([
            'name' => 'Towing',
            'slug' => 'towing',
        ]);
        Karoseri::create([
            'name' => 'Reefer',
            'slug' => 'reefer',
        ]);
        Karoseri::create([
            'name' => 'Tronton Bak',
            'slug' => 'tronton-bak',
        ]);
    }
}
