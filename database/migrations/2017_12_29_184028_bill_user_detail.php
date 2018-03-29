<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BillUserDetail extends Migration
{
    public function up()
    {
        Schema::create('bill_user_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->date('give_back_date');
            $table->integer('id_book');
            $table->integer('id_bill_user');
            $table->integer('status');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_user_detail');
    }
}
