<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'people';


    protected  $primaryKey = 'id';


    protected $fillable = ['identity','name', 'last_name','address','phone'];

}
