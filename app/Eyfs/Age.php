<?php

namespace App\Eyfs;

use Illuminate\Database\Eloquent\Model;

class Age extends Model
{
    public function statements()
    {
        return $this->hasMany('App\Eyfs\Statement');
    }
}
