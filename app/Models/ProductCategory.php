<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'parent_id', 'slug', 'meta_title', 'meta_description', 'meta_keywords', 'is_active'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
