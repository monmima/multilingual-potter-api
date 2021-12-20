<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name_en')->nullable();
            $table->string('name_fr')->nullable();
            $table->string('description_fandom_fr')->nullable();
            $table->string('name_it')->nullable();
            $table->string('name_la')->nullable();
            $table->string('description_en')->nullable();
            $table->string('description_it')->nullable();
            $table->string('image_1')->nullable();
            $table->string('actor')->nullable();
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
        Schema::dropIfExists('characters');
    }
}
