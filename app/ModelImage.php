<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelImage extends Model
{
    protected $table = 'model_images';
    protected $fillable = array('image');
    
    public function model()
    {
        return $this->belongsTo('App\Model');
    }
}
