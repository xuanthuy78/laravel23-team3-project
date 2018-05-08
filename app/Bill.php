<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'user_id', 'name', 'phone', 'address', 'date_order', 'total', 'payment', 'note', 'status',
    ];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function bill_details(){
        return $this->hasMany('App\BillDetail','bill_id','id');
    }
}
