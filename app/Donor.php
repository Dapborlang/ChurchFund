<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $guarded = ['id'];

    function getDateAttribute()
    {
        return date('d-m-Y', strtotime($this->attributes['date']));
    }

    public function Gender()
    {
       return $this->belongsTo('App\Gender','sex');
    }

    public function transaction()
    {
        return $this->hasMany('App\Transaction')->orderBy('date');
    }
}
