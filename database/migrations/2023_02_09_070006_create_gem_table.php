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
        Schema::create('gem', function (Blueprint $table) {
            $table->id();
            $table->string('gem_name');
            $table->string('chemical composition');
            $table->integer('Mohs hardness');
            $table->string('overview');
            $table->string('maintenance');
            $table->string('Summary & Notes');
            $table->string('image');
            $table->integer('birth_month');
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
        Schema::dropIfExists('gem');
    }
};
