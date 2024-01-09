<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $fillable = [
        "product_id","attributes","quantity"
    ];
    public function products():BelongTo
    {
        return $this->belongTo(Product::class);
    }
}
