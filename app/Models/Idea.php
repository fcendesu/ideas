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
        'content',
        'likes',
    ];
    //

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
