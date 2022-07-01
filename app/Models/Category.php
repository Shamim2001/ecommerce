<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    // slug
    public function getRouteKeyName() {
        return 'slug';
    }



    // category parent one to one relation
    public function parent_category()
    {
        return $this->belongsTo(Category::class);
    }

    // Category child one to many relation
    public function child_category()
    {
        return $this->hasMany(Category::class);
    }
}
