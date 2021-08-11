<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class Dues extends Model
{
    protected $fillable = ['date', 'dues', 'total', 'description', 'user_id'];
}
