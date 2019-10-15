<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokan extends Model
{
    // Start From Here
    protected $guarded =[' '];
    public function Products(){
        return $this->hasMany('App\Product','dokan_name_id');
    }
}
