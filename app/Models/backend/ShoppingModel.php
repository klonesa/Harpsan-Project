<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class ShoppingModel extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name','description','type',
           ];

public function getRouteKeyName()
{
    return  'slug';
}
}