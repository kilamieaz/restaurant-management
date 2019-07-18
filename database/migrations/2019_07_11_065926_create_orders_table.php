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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('member_id')->index()->nullable();
            $table->unsignedBigInteger('employee_id')->index()->nullable();
            // $table->unsignedBigInteger('table_id')->index()->nullable();
            $table->string('order_code');
            $table->integer('total')->nullable();
            // $table->unsignedBigInteger('member_id')->index();
            // $table->unsignedBigInteger('employee_id')->index();
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
