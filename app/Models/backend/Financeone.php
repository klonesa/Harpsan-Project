<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class Financeone extends Model
{
    protected $fillable = ['date', 'financeone', 'total', 'description', 'user_id'];


    public function financeone_images()
    {
        return $this->hasMany('App\Models\frontend\financeone_images');
    }
}

