<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = array('title');
    
    public function model()
    {
        return $this->hasMany('App\Car_model');
    }
}
