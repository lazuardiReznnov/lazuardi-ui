<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'brand_model_id' => 3,
            'karoseri_id' => 1,
            'noreg' => 'A 9225 ZB',
            'slug' => 'a-9225-zb',
        ]);
        Unit::create([
            'brand_model_id' => 1,
            'karoseri_id' => 1,
            'noreg' => 'A 9228 ZA',
            'slug' => 'a-9228-za',
        ]);
        Unit::create([
            'brand_model_id' => 4,
            'karoseri_id' => 1,
            'noreg' => 'A 9189 ZY',
            'slug' => 'a-9189-zy',
        ]);
        Unit::create([
            'brand_model_id' => 1,
            'karoseri_id' => 2,
            'noreg' => 'B 9866 JZM',
            'slug' => 'b-9866-jzm',
        ]);
    }
}
