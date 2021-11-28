<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class financeone_images extends Model
{
    protected $fillable = ['financeone_id', 'financeone_image_path'];

    
    public function financeones()
    {
        return $this->belongsTo('App\Models\backend\financeones');
    }
}