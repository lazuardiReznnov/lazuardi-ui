<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'Hino',
            'slug' => 'hino',
        ]);

        Brand::create([
            'name' => 'Mitsubishi',
            'slug' => 'mitshubisi',
        ]);

        Brand::create([
            'name' => 'Toyota',
            'slug' => 'toyota',
        ]);

        Brand::create([
            'name' => 'Isuzu',
            'slug' => 'isuzu',
        ]);
    }
}
