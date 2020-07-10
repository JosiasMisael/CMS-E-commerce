<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','slug','module','icon'];

   public function setNameAttribute($name){
        $this->attributes['name']= $name;
        $this->attributes['slug']= Str::slug($name) ;
    }


    public function getRouteKeyName()
       {
           return 'slug';
       }

}
