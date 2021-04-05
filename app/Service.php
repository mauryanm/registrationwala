<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;

class Service extends Model
{
    use Translatable;

    protected $translatable = ['slug', 'name'];

    protected $table = 'services';

    protected $fillable = ['slug', 'name'];

    public function posts()
    {
        return $this->hasMany(Voyager::modelClass('Post'))
            ->published()
            ->orderBy('created_at', 'DESC');
    }

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
}
