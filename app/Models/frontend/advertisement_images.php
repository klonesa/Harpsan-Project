<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class advertisement_images extends Model
{
    protected $fillable = ['advertisement_id', 'advertisement_image_path'];
    public function advertisement()
    {
        return $this->belongsTo('App\Models\frontend\advertisement');
    }
}
