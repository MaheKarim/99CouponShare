<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    protected $guarded = [' '];

    public function Products(){
        return $this->hasMany('App\Product');
    }


}
