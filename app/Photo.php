<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'photo_url','post_id',
    ];
    
    //この写真が所属する投稿
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
