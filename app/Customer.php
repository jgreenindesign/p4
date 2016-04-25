<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'city', 'state', 'zip', 'phone', 'email', 'user_id'];

    public function user() {
    	return $this->belongsTo('\p4\User');
    }

}
