<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $fillable = [
        'bill_id', 'product_id', 'quantity', 'unit_price',
    ];

    public function bill(){
        return $this->belongsTo('bill','bill_id','id');
    }

    public function product(){
        return $this->belongsTo('product','product_id','id');
    }
}
