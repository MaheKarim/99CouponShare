<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use Searchable;
    protected $tables = 'products';

    public function Category(){
        return $this->belongsTo('App\Category','category_name_id' ,'id');
    }
    public function Dokan(){
        return $this->belongsTo('App\Dokan','dokan_name_id' ,'id');
    }
    public function Area(){
        return $this->belongsTo('App\Area');
    }
}

