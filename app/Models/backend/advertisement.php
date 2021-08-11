<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class advertisement extends Model
{
    protected $fillable=['title','text','url','ad_order'];
}
