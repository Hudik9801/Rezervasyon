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
        Schema::create('table_opens', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('time1')->nullable();
            $table->string('time2')->nullable();
            $table->integer('person')->nullable();
            $table->integer('table_no')->nullable();
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
        Schema::dropIfExists('table_opens');
    }
};
