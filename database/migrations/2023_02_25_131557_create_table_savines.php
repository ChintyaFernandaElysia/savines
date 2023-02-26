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
        Schema::create('tbclaim', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamps();
            $table->date('due_date');
            $table->string('debtor');
			$table->string('description');
			$table->integer('amount');
			$table->integer('total_paid');
        });

        Schema::create('tbdebt', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamps();
            $table->date('due_date');
            $table->string('claimer');
			$table->string('description');
			$table->integer('amount');
			$table->integer('total_paid');
        });

        Schema::create('tbexpense', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamps();
            $table->string('category');
			$table->string('description');
			$table->integer('amount');
        });

        Schema::create('tbincome', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamps();
            $table->string('category');
			$table->string('description');
			$table->integer('amount');
        });

        Schema::create('tbnotes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
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

        Schema::create('tbuser', function (Blueprint $table) {
            $table->id('id');
            $table->string('user_id');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });
        Schema::create('tbgoals', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamps();
            $table->string('title');
			$table->string('description');
			$table->integer('amount');
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
