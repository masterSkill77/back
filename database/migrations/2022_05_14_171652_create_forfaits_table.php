<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForfaitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forfaits', function (Blueprint $table) {
            $table->id();
            $table->string('forfait_name');
            $table->string('typeData');
            $table->string('limiteMax');
            $table->string('price');
            $table->string('emplacement');
            $table->string('duration');
            $table->string('extension');
            $table->string('priceUnit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forfaits');
    }
}
