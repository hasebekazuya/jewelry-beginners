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
        Schema::create('gems', function (Blueprint $table) {
            $table->id();
            $table->string('gem_name');
            $table->string('chemical_composition');
            $table->string('mohs_hardness');
            $table->string('overview');
            $table->string('maintenance');
            $table->string('summary_notes');
            $table->string('image_path')->nullable();
            $table->integer('birthstone');
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
        Schema::dropIfExists('gems');
    }
};
