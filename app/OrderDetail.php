<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
    protected $tablle   = 'order_details';
    protected $fillable = ['id','ordersid','prdid','qty','warna','size'];

}
