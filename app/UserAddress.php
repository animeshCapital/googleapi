<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
        'user_id','address1', 'address2', 'city', 'state', 'country', 'zip_code'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
