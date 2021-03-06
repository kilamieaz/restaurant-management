<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menus', function (Blueprint $table) {
            // foreign menu juga akan terhapus jika category di hapus
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories');
        });

        // foreign detail order
        Schema::table('detail_orders', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders');
            // $table->foreign('menu_id')->references('id')->on('menus');
            $table->foreign('table_id')->references('id')->on('tables');
            $table->foreign('chef_id')->references('id')->on('users');
            $table->foreign('waiter_id')->references('id')->on('users');
        });

        // foreign order
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('cashier_id')->references('id')->on('users');
            $table->foreign('member_id')->references('id')->on('users');
        });

        // foreign users
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
