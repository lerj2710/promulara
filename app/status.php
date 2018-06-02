<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $table = 'status';

    protected $primaryKey = 'id';
    protected $fillable = ['status'];


}
