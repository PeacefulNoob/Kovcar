<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car_Model extends Model
{
    protected $table = 'car_models';
    protected $fillable = array('cat_id','title', 'desription1', 'desription2', 'brochure_pdf', 'price_pdf','logo_image','cover_image');


    public function manufacturer()
    {
        return $this->belongsTo('App\Manufacturer');
    }

}
