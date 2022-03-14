<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];
    
    //このタグが所属する投稿
    public function posts()
    {
        return $this->belongsToMany(Post::class); 
    }
}
