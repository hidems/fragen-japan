<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function path()
    {
        return route('post', $this->id);
    }

    // Include comments for json output
    public function toArray()
    {
        return array_merge(parent::toArray(), [
            'comments'=>$this->comments,
        ]);
    }
}
