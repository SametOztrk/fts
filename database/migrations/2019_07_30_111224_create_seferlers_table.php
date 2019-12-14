<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeferlersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seferlers', function (Blueprint $table) {
            $table->bigIncrements('sefer_id');
            $table->bigInteger('ucak_id');
            $table->bigInteger('ucus_id');
            $table->time('saat');
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
        Schema::dropIfExists('seferlers');
    }
}
