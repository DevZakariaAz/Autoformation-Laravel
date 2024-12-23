<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['title', 'url']; // Add attributes for your Video table
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
