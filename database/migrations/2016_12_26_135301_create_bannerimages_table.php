<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bannerimages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('description',1000);
            $table->decimal('price',10,2);
            $table->decimal('discounted_price',10,2);
            $table->string('image',150);
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
        Schema::drop('bannerimages');
    }
}
