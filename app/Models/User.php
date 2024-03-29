<?php

namespace App\Models;
use App\Models\Role;
use App\Models\Product;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fast_name',
        'last_name',
        'phone',

        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *     
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles():BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function favourites():BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
