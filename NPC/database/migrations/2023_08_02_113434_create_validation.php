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
        Schema::create('validation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Province');
            $table->string('District');
            $table->string('Petrol Pump Name');
            $table->integer('Distributed Amount');
            $table->integer('Sold Amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validation');
    }
};