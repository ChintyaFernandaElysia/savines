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
            $table->timestamps();
            $table->string('title');
            $table->string('status');
			$table->string('amount');
			$table->string('description');
        });

        Schema::create('tbdebtandclaim', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamps();
            $table->date('due_date');
            $table->string('debtor');
			$table->string('description');
			$table->string('amount');
			$table->integer('total_paid');
        });

        Schema::create('tbperson', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamps();
            $table->string('name');
            $table->integer('idcardnumber');
            $table->string('gender');
            $table->string('birthday');
            $table->integer('phone_no');
            $table->string('address');
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
			$table->string('amount');
        });
        Schema::create('tbgoals', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamps();
            $table->string('title');
			$table->string('description');
			$table->string('amount');
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
