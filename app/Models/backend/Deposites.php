<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class Deposites extends Model
{
    protected $fillable = ['date', 'deposites', 'total', 'description', 'user_id'];


    public function deposites_images()
    {
        return $this->hasMany('App\Models\frontend\deposites_images');
    }
}

