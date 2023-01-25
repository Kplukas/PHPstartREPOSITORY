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
        Schema::create('saskaitas', function (Blueprint $table) {
            $table->id();
            $table->string('vardas', 20);
            $table->string('pavarde', 20);
            $table->string('ak', 11);
            $table->decimal('suma', 30, 2)->unsigned();
            $table->string('s_nr', 16);

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
        Schema::dropIfExists('saskaitas');
    }
};
