<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class DocCategory extends Model
{
   public function docs()
    {
        return $this->hasMany('App\LegalDocument');
    } 
}
