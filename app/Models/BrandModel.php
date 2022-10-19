<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use PhpParser\Builder\Function_;

class BrandModel extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['category_unit', 'brand'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category_unit()
    {
        return $this->hasMany(CategoryUnit::class);
    }

    public function brand()
    {
        return $this->hasMany(Brand::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
