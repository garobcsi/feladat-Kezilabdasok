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
        Schema::create('jatekos', function (Blueprint $table) {
            $table->id();
            $table->string('nev',45);
            $table->integer('mezszam');
            $table->string('poszt',45);
            $table->string('allampolgarsag',45)->nullable();
            $table->date('szuletesi_datum');
            $table->integer('magassag')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jatekos');
    }
};
