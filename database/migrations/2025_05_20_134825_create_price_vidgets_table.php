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
        Schema::create('price_vidgets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('size')->comment('Порядок вывода');
            $table->integer('order')->default(0)->comment('Порядок вывода');
            $table->string('img', 750)->comment('Ссылка на изображение');
            $table->float('price', 9, 2)->comment('Цена');
            $table->float('price_mont', 9, 2)->comment('Цена монтажа');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_vidgets');
    }
};
