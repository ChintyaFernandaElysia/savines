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
            $table->id('id');
            $table->string('user_id');
            $table->string('amount');
            $table->string('category');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('tbdebt', function (Blueprint $table) {
            $table->id('id');
            $table->string('user_id');
            $table->string('amount');
            $table->string('category');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('tbexpense', function (Blueprint $table) {
            $table->id('id');
            $table->string('user_id');
            $table->string('amount');
            $table->string('category');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('tbincome', function (Blueprint $table) {
            $table->id('id');
            $table->string('user_id');
            $table->string('amount');
            $table->string('category');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('tbnotes', function (Blueprint $table) {
            $table->id('id');
            $table->string('user_id');
            $table->string('title');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('tbsavings', function (Blueprint $table) {
            $table->id('id');
            $table->string('user_id');
            $table->string('amount');
            $table->string('category');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('tbuser', function (Blueprint $table) {
            $table->id('id');
            $table->string('user_id');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });
        Schema::create('tbclaim', function (Blueprint $table) {
            $table->id('id');
            $table->string('user_id');
            $table->string('amount');
            $table->string('category');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('tbclaim', function (Blueprint $table) {
            $table->id('id');
            $table->string('user_id');
            $table->string('amount');
            $table->string('category');
            $table->string('name');
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
        Schema::dropIfExists('table_keuangan');
    }
};
