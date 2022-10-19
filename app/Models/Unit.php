<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Unit extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['karoseri', 'brandModel'];

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

    public function karoseri()
    {
        return $this->hasMany(karoseri::class);
    }

    public function brandModel()
    {
        return $this->hasMany(brandModel::class);
    }
}
