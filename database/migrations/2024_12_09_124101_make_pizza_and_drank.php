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
        Schema::create('Pizzas', function (Blueprint $table) {
            $table->id('PizzaID');
            $table->string('Naam');
            $table->string('Omschrijving');
            $table->double('Prijs');
            $table->string('FotoUri');        
        });
        Schema::create('Drank', function (Blueprint $table) {
            $table->id('DrankID');
            $table->string('Naam');
            $table->string('Omschrijving');
            $table->double('Prijs');
            $table->string('FotoUri');        
        });
        Schema::create('Pizza_ingredient', function (Blueprint $table) {
            $table->id('ID');
            $table->foreignId('IngredientID');
            $table->foreignId('PizzaID');
        });

        Schema::create('Ingredient', function (Blueprint $table) {
            $table->id('IngredientID');
            $table->string('Naam');
            $table->integer('Voorraad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pizzas');
        Schema::dropIfExists('Drank');
        Schema::dropIfExists('Pizza_ingredient');
        Schema::dropIfExists('Ingredient');
    }
};
