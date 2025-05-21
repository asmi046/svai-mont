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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->comment('Название города');
            $table->boolean('is_default')->default(false)->comment('Название города');
            $table->string('slug')->unique()->comment('Slug города');
            $table->integer('order')->default(0)->comment('Порядок вывода');
            $table->string('rp')->comment('Родительный падеж');
            $table->string('pp')->comment('Предложный падеж');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
