<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;

class Lead extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'source', 'page', 'page_id', 'from','status','description'
    ];
    public function service(){
        return $this->belongsTo(Voyager::modelClass('Service'),'page_id');
    }
}
