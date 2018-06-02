<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

    protected $table = 'Invoices';


    protected  $primaryKey = 'id';


    protected $fillable = ['user','number_invoice','status'];

}
