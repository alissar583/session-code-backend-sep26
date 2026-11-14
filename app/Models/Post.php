<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['content'];

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
