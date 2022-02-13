<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillbale = [
        'name',
        'description',
        'ingredients',
        'recipe',
        'price',
        'active',
        'category_id',
        'created_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
