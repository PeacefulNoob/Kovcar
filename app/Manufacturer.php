<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $table = 'manufacturers';
    protected $fillable = array('title','description1', 'description2', 'cover_image', 'logo_image', 'brochure_pdf','price_pdf');
    
    public function model()
    {
        return $this->hasMany('App\Car_model');
    }
    public function manuf_image()
    {
        return $this->hasMany('App\ManufImage');
    }
}
