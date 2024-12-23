<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proyect_id')->nullable();
            $table->foreign('proyect_id')->references('id')->on('proyects');
            $table->string('Name', length:100);
            $table->text('Description');
            $table->string('Difficulty', length:30);
            $table->string('Length', length:30);
            $table->boolean('Done')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
