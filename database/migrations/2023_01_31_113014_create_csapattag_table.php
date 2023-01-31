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
        Schema::create('csapattag', function (Blueprint $table) {
            $table->foreignId('csapat_id');
            $table->foreignId('jatekos_id');
            $table->integer('tol')->nullable();
            $table->integer('ig')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csapattag');
    }
};
