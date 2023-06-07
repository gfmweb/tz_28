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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carsbrand_id')->constrained()->cascadeOnDelete();
            $table->foreignId('carsmodel_id')->constrained()->cascadeOnDelete();
            $table->date('manufactured_date')->nullable()->comment('Год выпуска');
            $table->integer('mileage')->nullable()->comment('Пробег');
            $table->string('color')->nullable()->comment('Цвет автомобиля');
            $table->timestamps();




        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
