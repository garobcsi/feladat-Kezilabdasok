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
        Schema::create('csapat', function (Blueprint $table) {
            $table->id();
            $table->string('nev',45);
            $table->string('orszag',45);
            $table->string('varos',30)->nullable();
            $table->string('stadion',45)->nullable();
            $table->integer('stadion_meret')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csapat');
    }
};
