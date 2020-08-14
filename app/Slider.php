<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slider';
    protected $fillable = array('title', 'cover_image', 'cover_image1','cover_image2', 'car_models_id','manufacturers_id');

    public function model()
    {
        return $this->belongsTo('App\Car_Model');
    }
    
    public function manufacturer()
    {
        return $this->belongsTo('App\Manufacturer');
    }

}
