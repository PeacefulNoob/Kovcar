<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car_Model extends Model
{
    protected $table = 'car_models';
    protected $fillable = array('manufacturers_id','title', 'brochure_pdf', 'price_pdf','logo_image','cover_image', 'exterior_desc','exterior_desc1','exterior_image','interior_desc', 'interior_desc1', 'interior_image','sec_desc','sec_image', 'teh_image','teh_desc','isActive');


    public function manufacturer()
    {
        return $this->belongsTo('App\Manufacturer');
    }

    
    public function packet()
    {
        return $this->hasMany('App\Model_package');
    }
    public function model_image()
    {
        return $this->hasMany('App\ModelImage');
    }
}
