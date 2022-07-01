<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Customer to product relation one to one
    public function customer()
    {
        return $this->belongsTo(User::class);
    }

    // Product processes
    public function processor()
    {
        return $this->hasOne(User::class, 'processed_by');
    }

    // Order product
    public function products()
    {
        return $this->hasOne(Order_product::class);
    }
}
