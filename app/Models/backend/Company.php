<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable=['name','adress','konum','detail'];


    public function getRouteKeyName()
    {
        return  'slug';
    }
}
