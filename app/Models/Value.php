<?php

namespace App\Models;
use App\Models\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;
class Value extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = [
        "name"
    ];
    public function attribute():BelongsTo
    {
        return $this->belongsTo(Attribute::class);
    }
}
