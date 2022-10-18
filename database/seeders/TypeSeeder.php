<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'brand_id' => 1,
            'name' => 'Dutro 300 110HD',
            'slug' => 'dutro-300-110hd',
        ]);

        Type::create([
            'brand_id' => 1,
            'name' => 'Dutro 300 130HD',
            'slug' => 'dutro-300-130hd',
        ]);

        Type::create([
            'brand_id' => 1,
            'name' => 'Dutro 300 130HD Long',
            'slug' => 'dutro-300-130hd-L',
        ]);

        Type::create([
            'brand_id' => 2,
            'name' => 'canter Super Speed 125',
            'slug' => 'canter-super-speed-125',
        ]);
    }
}
