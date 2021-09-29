<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

use App\Models\Traits\MultiLanguage;
class announcement extends Model
{
    use MultiLanguage;

    protected $fillable = [
       'title_tr', 'text_tr',
    ];

    /**
     * This array will have the attributes which you want it to support multi languages
     */
    protected $multi_lang = [
        'title',
        'text',
    ];

    public function announcement_images()
    {
        return $this->hasMany('App\Models\frontend\announcement_images');
    }


    public function unit_types()
    {
        return $this->belongsToMany('App\Models\backend\unit_type', 'unit_type_announcements')->withTimestamps();
    }



    public function getRouteKeyName()
    {
       return  'slug';
    }
}
