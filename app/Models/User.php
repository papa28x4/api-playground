<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\AdjustTime;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, AdjustTime;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'avatar', 'role_id',
        'country', 'terms', 'slug'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function fullName(){
        return $this->name.' '.$this->last_name;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['name', 'last_name']
            ]
        ];
    }


    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_user', 'user_id', 'post_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }
}