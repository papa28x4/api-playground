<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Traits\AdjustTime;

class Post extends Model
{
    use HasFactory, Sluggable, AdjustTime;

    protected $fillable = [
        'title', 'body', 'slug'
    ];

    protected $casts = [
        'body' => 'array'
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'post_user', 'post_id', 'user_id');
    }

    public function comments()
    {
        return $this->belongsToMany(Comment::class, 'post_id');
    }

    public function getTitleUpperCaseAttribute()
    {
        return strtoupper($this->title);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtolower($value);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
