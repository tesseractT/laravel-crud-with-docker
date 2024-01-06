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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('position');
            $table->string('nationality');
            $table->string('club')->nullable();
            $table->string('image')->nullable();
            $table->string('value')->nullable();
            $table->string('wage')->nullable();
            $table->string('foot');
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('contract')->nullable();
            $table->string('status');
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
