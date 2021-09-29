<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class advertisement extends Model
{
  

    protected $fillable=['title','text','url','ad_order'];

    /**
     * This array will have the attributes which you want it to support multi languages
     */

    public function advertisement_images()
    {
        return $this->hasMany('App\Models\frontend\advertisement_images');
    }


}