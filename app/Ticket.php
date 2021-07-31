<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;

class Ticket extends Model
{
    protected $fillable = [
        'site_user_id', 'subject', 'query'
    ];
    public function user(){
        return $this->belongsTo(Voyager::modelClass('SiteUser'));
    }
}
