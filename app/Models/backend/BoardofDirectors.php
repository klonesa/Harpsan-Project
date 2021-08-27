<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class BoardofDirectors extends Model
{
    protected $fillable = [
        'name_tr','text_tr','position_tr',
           ];
       
           /**
            * This array will have the attributes which you want it to support multi languages
            */
           protected $multi_lang = [
               'name',
               'text',
               'position',
           ];
       
       }