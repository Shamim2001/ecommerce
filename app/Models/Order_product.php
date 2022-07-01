<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Oder relation one to one
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Product relation one to one
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
