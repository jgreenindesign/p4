<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['customer_name', 'customer_city', 'customer_state', 'customer_zip', 'customer_phone', 'customer_email'];

    public function user() {
    	return $this->belongsTo('\p4\Customer');
    }

}
