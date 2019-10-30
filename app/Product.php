<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use Laravel\Scout\Searchable;
use App\Dokan;

class Product extends Model
{
    use Searchable;
    protected $tables = 'products';

    public function Category(){
        return $this->belongsTo('App\Category','category_name_id' ,'id');
    }
    public function Dokan(){
        return $this->hasOne('App\Dokan','id' ,'dokan_name_id');
    }
    public function Area(){
        return $this->belongsTo('App\Area','area_name_id','id');
    }
}

