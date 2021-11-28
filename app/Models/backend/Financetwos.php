<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class Financetwos extends Model
{
    protected $fillable = ['date', 'financetwos', 'total', 'description', 'user_id'];


    public function financetwos_images()
    {
        return $this->hasMany('App\Models\frontend\financetwos_images');
    }
}

