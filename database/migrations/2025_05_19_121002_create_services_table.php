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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->comment('Название');
            $table->string('sub_title')->comment('Название');
            $table->integer('order')->default(0)->comment('Порядок вывода');
            $table->string('img', 550)->comment('Ссылка на изображение');
            $table->text('top_description')->nullable()->comment('Описание верхнее');
            $table->longText('description')->nullable()->comment('Описание основное');
            $table->text('price')->nullable()->comment('Цена');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
