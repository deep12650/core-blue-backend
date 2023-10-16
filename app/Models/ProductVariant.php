<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku', 'name', 'product_id', 'price', 'sale_price', 'description', 'stock', 'is_featured', 'on_sale', 'is_active', 'meta_title', 'meta_description', 'meta_keywords'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
