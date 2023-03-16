<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbtransactions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('date');
            $table->timestamps();
            $table->string('title');
            $table->string('status');
			$table->integer('amount');
			$table->string('description');
        });

        Schema::create('tbdebtsandloan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamps();
            $table->date('due_date');
            $table->string('title');
            $table->string('status');
            $table->string('amount');
			$table->string('description');
			$table->integer('debtandloanperson_id');
        });

        Schema::create('tbrepaymentanddebtcollection', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamps();
            $table->date('due_date');
            $table->string('title');
            $table->string('amount');
			$table->string('description');
			$table->integer('debtandloan_id');
        });

        Schema::create('tbdebtandloadperson', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamps();
            $table->string('name');
            $table->string('gender');
            $table->string('telp');
            $table->string('address');
            $table->string('birthday');
        });

        Schema::create('tbnotes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('date');
            $table->timestamps();
            $table->string('title');
			$table->string('description');
        });

        Schema::create('tbsavings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamps();
			$table->integer('amount');
        });
        Schema::create('tbgoals', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamps();
            $table->date('date');
            $table->string('title');
			$table->string('description');
			$table->integer('target');
			$table->integer('collected');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_savines');
    }
};
