<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';


    protected  $primaryKey = 'id';


    protected $fillable = ['categories_id','code', 'name_product','stock','status_id','detail','sale_price'];
}
