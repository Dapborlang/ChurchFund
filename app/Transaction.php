<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = ['id'];

    function getDateAttribute()
    {
        return date('d-m-Y', strtotime($this->attributes['date']));
    }
    
    public function Donor()
    {
       return $this->belongsTo('App\Donor','donor_id');
    }
}
