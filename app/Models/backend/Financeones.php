<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class financeones extends Model
{
    protected $fillable = ['date', 'financeones', 'total', 'description', 'user_id'];


    public function financeone_images()
    {
        return $this->hasMany('App\Models\frontend\financeone_images');
    }
}

