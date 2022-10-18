<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryUnit;

class CategoryUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryUnit::create([
            'name' => 'Colt Diesel',
            'slug' => 'cd',
        ]);
        CategoryUnit::create([
            'name' => 'Colt Diesel Double',
            'slug' => 'cdd',
        ]);
        CategoryUnit::create([
            'name' => 'Fuso',
            'slug' => 'fs',
        ]);
        CategoryUnit::create([
            'name' => 'Tronton',
            'slug' => 'tronton',
        ]);
        CategoryUnit::create([
            'name' => 'Pick Up',
            'slug' => 'pu',
        ]);
    }
}
