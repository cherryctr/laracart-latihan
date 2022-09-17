<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('ordersid');
            $table->char('ordersidencytpe');
            $table->integer('usersid');
            $table->char('ordfullname',60);
            $table->char('ordmail',30);
            $table->char('ordnohp',13);
            $table->char('ordalamat');
            $table->char('ordkota',25);
            $table->char('ordprovinsi',20);
            $table->char('ordbyr',15);
            $table->char('ordstatus',2);
            $table->char('ordmethod',3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
