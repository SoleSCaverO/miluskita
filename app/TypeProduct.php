<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    protected $connection = 'second';
    protected $table = 'type';
    protected $primaryKey = 'type';
    protected $hidden = array('type','created_at', 'updated_at');
}
