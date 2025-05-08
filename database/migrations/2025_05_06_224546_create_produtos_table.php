<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_produto', 200);
            $table->decimal('preco', 10, 2);
            $table->decimal('estoque', 10, 3);
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
