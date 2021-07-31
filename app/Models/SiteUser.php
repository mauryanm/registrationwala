<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class SiteUser extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $hidden = [
     'password',
    ];
    public function getAuthPassword()
    {
     return $this->password;
    }
}
