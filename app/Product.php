<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $connection = 'first';
    protected $table = 'product';
    protected $primaryKey = 'product';
    protected $hidden = array('type','created_at', 'updated_at');

    public function type_product()
    {
        return $this->belongsTo('App\TypeProduct','type','type');
    }
}
