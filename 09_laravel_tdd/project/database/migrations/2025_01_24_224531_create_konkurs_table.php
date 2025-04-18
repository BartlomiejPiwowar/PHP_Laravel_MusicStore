<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('konkurs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->text('answer');
            $table->text('images')->nullable(); // Przechowujemy ścieżki do zdjęć w formacie JSON
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konkurs');
    }
};
