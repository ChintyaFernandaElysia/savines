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

        Schema::create('tbdebtandloan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamps();
            $table->date('date');
            $table->date('due_date');
            $table->string('title');
            $table->string('status');
            $table->string('amount');
			$table->string('description');
			$table->string('person_name');
			$table->string('person_telp');
			$table->string('person_address');
			$table->string('tracking');
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
        Schema::create('tbnotes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('date');
            $table->timestamps();
            $table->string('title');
            $table->string('description');
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
