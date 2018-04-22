<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'category_id', 'description', 'unit_price', 'promotion_price', 'image', 'unit',
    ];

    public function category(){
        return $this->belongsTo('category','category_id','id');
    }

    public function bill_details(){
        return $this->hasMany('bill_detail','product_id','id');
    }
}
