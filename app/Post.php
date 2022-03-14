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
    
    //この投稿が持つ写真
    public function photos(){
        return $this->hasMany(Photo::class);
    }
    
    //この投稿がもつタグ
    public function tags(){
        return $this->belongsToMany(Tag::class); 
    }
    
}
