<?php

namespace App\Models;
use App\Models\Category;
use App\Models\Stock;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "category_id",
        "name",
        "price",
        "description"
    ];
    public function category():BelongTo
    {
        return $this->belongTo(Category::class);
    }
    public function stocks():HasMany
    {
        return $this->hasMany(Stock::class);
    }
}
