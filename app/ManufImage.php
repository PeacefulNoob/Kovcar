<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManufImage extends Model
{
    protected $table = 'manuf_image';
    protected $fillable = array('image');

    public function manufacturer()
    {
        return $this->belongsTo('App\Manufacturer');
    }
}
