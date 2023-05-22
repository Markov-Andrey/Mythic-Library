<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('worlds', function (Blueprint $table) {
            $table->id();

            $table->string('new_world', 50);
            $table->text('tags');
            $table->string('world_name_slug', 50);
            $table->string('short_description', 1000);
            $table->string('long_description', 5000);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('world');
    }
};
