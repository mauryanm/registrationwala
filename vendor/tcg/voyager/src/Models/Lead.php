<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Lead extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'source', 'page', 'page_id', 'from','status','description'
    ];
}
