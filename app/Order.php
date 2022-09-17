<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['id','ordersidencytpe','usersid','ordfullname','ordmail','ordnohp','ordalamat','ordkota','ordprovinsi','ordbyr','ordstatus','ordmethod',];
}
