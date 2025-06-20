<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_size')
            ->withPivot('quantity')
            ->withTimestamps();
    }
}
