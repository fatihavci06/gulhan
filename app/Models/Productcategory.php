<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productcategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function brands()
    {
        return $this->hasMany(Brand::class, 'category_id', 'id');
    }

    public function categories()
    {
        return $this->hasMany(Productcategory::class, 'category_id', 'id');
    }
}
