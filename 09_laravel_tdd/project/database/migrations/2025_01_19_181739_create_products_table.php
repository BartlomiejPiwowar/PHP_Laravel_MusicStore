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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nazwa produktu
            $table->text('description')->nullable(); // Opis produktu
            $table->decimal('price', 10, 2); // Cena produktu
            $table->integer('quantity')->nullable(); // Ilość produktu
            $table->enum('type', [ // jaki to typ intrumentu / produktu
                'Instrumenty smyczkowe',
                'Instrumenty klawiszowe',
                'Instrumenty strunowe',
                'Instrumenty dęte',
                'Instrumenty perkusyjne',
                'Płyty',
                'Śpiewniki',
                'Inne'
            ]);
            $table->string('image', 2048)->nullable(); // Ścieżka do obrazu produktu
            $table->timestamps(); // Timestamps: created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
