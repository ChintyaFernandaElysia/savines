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
        Schema::create('tbclaims', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamps();
            $table->date('due_date');
            $table->string('debtor');
			$table->string('description');
			$table->integer('amount');
			$table->integer('total_paid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbclaim');
    }
};
