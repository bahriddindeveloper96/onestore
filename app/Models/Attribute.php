<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Value;
class Attribute extends Model
{
    use HasFactory;
    protected $fillable =[
        "name"
    ];
    public function value():HasMany
    {
        return $this->hasMany(Value::class);
    }
}
