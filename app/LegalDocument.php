<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class LegalDocument extends Model
{
     protected $guarded = [];
    public function category()
    {
        return $this->hasMany('App\DocCategory');
    } 
}
