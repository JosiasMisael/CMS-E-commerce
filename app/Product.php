<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'price',
        'discount',
        'in_discount',
        'description',
        'image',
        'status'];

    public function setNameAttribute($name){
       $this->attributes['name'] = $name;
       $this->attributes['slug'] = Str::slug($name);
    }

    public function setImageAttribute($image)
    {    $path ='/'.date('Y-m-d');
        $this->attributes['image'] = $image->storeAs( $path, uniqid().'.'.$image->getClientOriginalExtension() , 'public');
    }
}
