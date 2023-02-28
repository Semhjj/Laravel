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
        Schema::create('klaar', function (Blueprint $table) {
            $table->id();
            $table->string('opdrachtKeuze');
            $table->string('email');
            $table->string('opdracht');
            $table->string('opdracht_omschrijving');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klaar');

    }
};
