<?php

namespace App\Eyfs;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    public $timestamps = false;

    protected $fillable = ['area_id', 'aspect_id', 'age_id', 'description'];

    public function area()
    {
        return $this->belongsTo('App\Eyfs\Area');
    }

    public function aspect()
    {
        return $this->belongsTo('App\Eyfs\Aspect');
    }
}
