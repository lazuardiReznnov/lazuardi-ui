<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BrandModel;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandModel::create([
            'brand_id' => 1,
            'category_unit_id' => 2,
            'name' => 'Dutro 300 110HD',
            'slug' => 'dutro-300-110hd',
        ]);

        BrandModel::create([
            'brand_id' => 1,
            'category_unit_id' => 2,
            'name' => 'Dutro 300 130HD',
            'slug' => 'dutro-300-130hd',
        ]);

        BrandModel::create([
            'brand_id' => 1,
            'category_unit_id' => 2,
            'name' => 'Dutro 300 130HD Long',
            'slug' => 'dutro-300-130hd-L',
        ]);

        BrandModel::create([
            'brand_id' => 2,
            'category_unit_id' => 2,
            'name' => 'canter Super Speed 125',
            'slug' => 'canter-super-speed-125',
        ]);
    }
}
