<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $guarded = ['id'];

    public function Gender()
    {
       return $this->belongsTo('App\Gender','sex');
    }

    public function transaction()
    {
        return $this->hasMany('App\Transaction')->orderBy('date');
    }
}
