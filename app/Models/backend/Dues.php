<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class Dues extends Model
{
    protected $fillable = ['date', 'description', 'user_id'];



    public function dues_images()
    {
        return $this->hasMany('App\Models\frontend\dues_images');
    }

}
