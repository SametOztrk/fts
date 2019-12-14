<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUcaklarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ucaklars', function (Blueprint $table) {
            $table->bigIncrements('ucak_id');
            $table->Integer('seri_no');
            $table->Integer('koltuk_sayısı');
            $table->string('ucak_adı');
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
        Schema::dropIfExists('ucaklars');
    }
}
