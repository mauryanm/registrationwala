<?php

namespace TCG\Voyager\Models;

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
            ->orderBy('created_at', 'DESC')
            ->take(2);
    }

    public function category()
    {
        return $this->belongsTo(Voyager::modelClass('Category'));
    }

    public function poststake2()
    {
        return $this->hasMany(Voyager::modelClass('Post'))
            ->published()
            ->orderBy('created_at', 'DESC')
            ->take(2);
    }
}
