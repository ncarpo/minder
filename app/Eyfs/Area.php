<?php

namespace App\Eyfs;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public $timestamps = false;

    protected $fillable = ['type', 'name', 'abbreviation'];

    public function aspects() {
        return $this->hasMany('App\Eyfs\Aspect');
    }

    public function statements()
    {
        return $this->hasMany('App\Eyfs\Statement');
    }
}
