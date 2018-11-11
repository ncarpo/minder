<?php

namespace App\Eyfs;

use Illuminate\Database\Eloquent\Model;

class Aspect extends Model
{
    public $timestamps = false;

    protected $fillable = ['area_id', 'name'];

    public function area() {
        return $this->belongsTo('App\Eyfs\Area');
    }

    public function statements()
    {
        return $this->hasMany('App\Eyfs\Statement');
    }
}