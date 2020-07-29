<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = ['id'];

    public function Donor()
    {
       return $this->belongsTo('App\Donor','donor_id');
    }
}