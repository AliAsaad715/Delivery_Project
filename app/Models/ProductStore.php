<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStore extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function order_product_stores()
    {
        return $this->hasMany(OrderProductStore::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

}