<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'media_id', 'product_variant_id'
    ];
}
