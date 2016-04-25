<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable = ['customer_id', 'sales_product_id', 'sales_product_total'];

    public function customer() {
    	return $this->belongsTo('\p4\Customer');
    }
}
