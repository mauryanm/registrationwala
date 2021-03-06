<?php

namespace TCG\Voyager\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use Translatable;

    protected $translatable = ['slug', 'name'];

    protected $table = 'categories';

    protected $fillable = ['slug', 'name'];

    public function posts()
    {
        return $this->hasMany(Voyager::modelClass('Post'))
            ->published()
            ->orderBy('publish_date', 'DESC')->limit(2);
    }

    public function catposts()
    {
        return $this->hasMany(Voyager::modelClass('Post'))
            ->published()
            ->orderBy('publish_date', 'DESC');
    }

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
    public function services()
    {
        return $this->hasMany(Voyager::modelClass('Service'));
    }
    public function postservices()
    {
        return $this->hasMany(Voyager::modelClass('Service'))->has('allpost');
    }
}
