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
        // foreign menu juga akan terhapus jika category di hapus
        Schema::table('menus', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

        // foreign detail order
        Schema::table('detail_orders', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('menu_id')->references('id')->on('menus');
            $table->foreign('table_id')->references('id')->on('tables');
        });

        // foreign order
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('member_id')->references('id')->on('members');
            $table->foreign('employee_id')->references('id')->on('employees');
            // $table->foreign('table_id')->references('id')->on('tables');
        });

        // foreign employee
        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles');
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
