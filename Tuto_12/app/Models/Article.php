<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tag');
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
