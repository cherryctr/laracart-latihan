<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $fillable = ['prdname','prdslug','prdcatid','prdsize','prdprice','prddesc','prdstock','prdthumb'];
}
