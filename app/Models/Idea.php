<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = [
        'user_id',
        'content',
        'likes',
    ];
    //

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
