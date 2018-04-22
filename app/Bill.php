<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'user_id', 'name', 'phone', 'address', 'date_order', 'total', 'payment', 'note', 'status',
    ];

    public function user(){
        return $this->belongsTo('user','user_id','id');
    }

    public function bill_details(){
        return $this->hasMany('bill_detail','bill_id','id');
    }
}
