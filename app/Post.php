<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'title', 'content', 'path'
    ];

    //Accessors

    public function getTitleAttribute($value){
        return strtoupper($value);
    }

    public function getPathAttribute($value){
        return "/images/". $value;
    }

    //Mutators

    public function setTitleAttribute($value){
        $this->attributes['title'] = strtoupper($value);
    }

    //QueryScope

    public static function scopeLatests($query){
        return $query->orderBy('id','desc')->get();
    }
    
}

