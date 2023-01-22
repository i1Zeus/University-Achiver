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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title', 60);
            $table->text('description')->nullable();
            $table->string('image_path')->nullable();
            $table->string('image_loc')->nullable();
            $table->string('file_path')->nullable();
            $table->boolean('state')->default(0);
            $table->string('address', 120);
            $table->date('start');
            $table->date('end')->nullable();
            $table->time('time');
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
        Schema::dropIfExists('events');
    }
};
