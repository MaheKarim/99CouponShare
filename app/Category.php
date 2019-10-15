<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $tables = 'categories';

    public function Products(){
        return $this->hasMany('App\Product','category_name_id');
    }
}
