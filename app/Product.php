<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $tables = 'products';

    public function Category(){
        return $this->belongsTo('App\Category','category_name_id' ,'id');
    }
}
