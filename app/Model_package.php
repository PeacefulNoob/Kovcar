<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_package extends Model
{
    protected $table = 'model_packages';
    protected $fillable = array('title', 'description', 'image', 'image1', 'image2','cover_image','car_models_id');

    public function model()
    {
        return $this->belongsTo('App\Car_Model');
    }
}
     
