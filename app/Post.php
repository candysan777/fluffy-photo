<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
            'caption',
        ];
    
    //この投稿が所属するユーザー
    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
