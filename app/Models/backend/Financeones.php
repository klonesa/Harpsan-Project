<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class Financeones extends Model
{
    protected $fillable = ['date', 'financeones', 'total', 'description', 'user_id'];


    public function financeones_images()
    {
        return $this->hasMany('App\Models\frontend\financeones_images');
    }
}

